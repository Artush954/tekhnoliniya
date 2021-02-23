<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServicesInfo;
use App\Models\Size;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ServicesInfoController extends Controller
{
    /**
     * @var FileService
     */
    private $fileService;

    /**
     * PageController constructor.
     * @param FileService $fileService
     */
    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = ServicesInfo::orderBy('services_id', 'asc')->get();
        return view('admin.servicesinfo.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.servicesinfo.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        $validated = $this->validate($request, [

            'title' => 'required',
            'services_id' => 'required',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required',



        ]);

        $image = $this->fileService->upload($request->file('image'));
        $validated['image'] = $image;
        $serviceinfo = ServicesInfo::create($validated);

        if (array_key_exists('btn_create_and_edit', $request->all())) {
            return redirect()->route('admin.servicesInfo.edit', ['serviceinfo' => $serviceinfo->id]);
        } elseif (array_key_exists('btn_create_and_list', $request->all())) {
            return redirect()->route('admin.servicesInfo.index');
        } else {
            return redirect()->route('admin.servicesInfo.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = ServicesInfo::findOrFail($id);
        $services = Service::all();

        return view('admin.servicesInfo.edit', compact('services','result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $this->validate($request, [

            'title' => 'required',
            'services_id' => 'required',
            'price' => 'required',

            'description' => 'required',



        ]);

        $result = ServicesInfo::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $this->fileService->upload($request->file('image'));
            $this->fileService->remove($result->image);
            $validated['image'] = $image;
        }
        $serviceinfo = $result->update($validated);

        if (array_key_exists('btn_update_and_edit', $request->all())) {
            return redirect()->route('admin.servicesInfo.edit', ['serviceinfo' => $result->id]);
        } elseif (array_key_exists('btn_update_and_list', $request->all())) {
            return redirect()->route('admin.servicesInfo.index');
        } else {
            return redirect()->route('admin.servicesInfo.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = ServicesInfo::findOrFail($id);
        $result->delete();

        return redirect()->route('admin.servicesInfo.index');
    }
}
