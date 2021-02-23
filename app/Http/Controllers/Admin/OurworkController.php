<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OurWorks;
use App\Models\Service;
use App\Services\FileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class OurworkController extends Controller
{
    /**
     * @var string
     */
    private $fileDir = '/images/';

    /**
     * @var int[]
     */
    private $fileCropSize = ['w' => 375, 'h' => 285];

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
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $results = OurWorks::orderBy('service_id', 'asc')->with('service')->get();
        return view('admin.ourwork.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $categories = Service::all();

        return view('admin.ourwork.create',compact('categories'));
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
            'service_id' => 'required',
            'image' => 'required',
        ]);
        $image = $this->fileService->upload($request->file('image') ,$this->fileDir, $this->fileCropSize );
        $validated['image'] = $image;

        $page = OurWorks::create($validated);

        if (array_key_exists('btn_create_and_edit',$request->all())) {
            return redirect()->route('admin.ourwork.edit', ['ourwork' => $page->id]);
        } elseif (array_key_exists('btn_create_and_list',$request->all())) {
            return redirect()->route('admin.ourwork.index');
        } else {
            return redirect()->route('admin.ourwork.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
        $result = OurWorks::findOrFail($id);
        $categories = Service::all();

        return view('admin.ourwork.edit', compact('result','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validated= $this->validate($request,[
                'image'=>'required',
                'service_id'=>'required',
        ]);
        $result= OurWorks::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->fileService->upload($request->file('image'),$this->fileDir, $this->fileCropSize);
            $this->fileService->remove($result->image);
            $validated['image'] = $image;
        }
        $result->update($validated);
        if (array_key_exists('btn_update_and_edit',$request->all())) {
            return redirect()->route('admin.ourwork.edit', ['ourwork' => $result->id]);
        } elseif (array_key_exists('btn_update_and_list',$request->all())) {
            return redirect()->route('admin.ourwork.index');
        } else {
            return redirect()->route('admin.ourwork.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $result = OurWorks::findOrFail($id);
        $this->fileService->remove($result->image,$this->fileDir);
        $result->delete();

        return redirect()->route('admin.ourwork.index');
    }
}
