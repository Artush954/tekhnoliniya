<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\FileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class ServicesController extends Controller
{
    /**
     * @var string
     */
    private $fileDir = '/images/';

    /**
     * @var int[]
     */
    private $fileCropSize = ['w' => 580, 'h' => 350];

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
        $results = Service::where('status', '1')->orderBy('title', 'asc')->get();
        return view('admin.services.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('admin.services.create');
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
            'image' => 'required',
            'description' => 'required',
            'slug'=>'required',

        ]);
        $image = $this->fileService->upload($request->file('image'), $this->fileDir, $this->fileCropSize);

        $validated['image'] = $image;
        $service = Service::create($validated);

        if (array_key_exists('btn_create_and_edit', $request->all())) {
            return redirect()->route('admin.service.edit', ['service' => $service->id]);
        } elseif (array_key_exists('btn_create_and_list', $request->all())) {
            return redirect()->route('admin.service.index');
        } else {
            return redirect()->route('admin.service.create');
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
        $result = Service::findOrFail($id);

        return view('admin.services.edit', compact('result'));
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
        $validated = $this->validate($request, [

            'title' => 'required',
            'slug'=>'required',
            'description' => 'required',



        ]);

        $result = Service::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->fileService->upload($request->file('image'),$this->fileDir, $this->fileCropSize);
            $this->fileService->remove($result->image);
            $validated['image'] = $image;
        }

        $services = $result->update($validated);

        if (array_key_exists('btn_update_and_edit', $request->all())) {
            return redirect()->route('admin.service.edit', ['service' => $result->id]);
        } elseif (array_key_exists('btn_update_and_list', $request->all())) {
            return redirect()->route('admin.service.index');
        } else {
            return redirect()->route('admin.service.index');
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
        $result = Service::findOrFail($id);
        $this->fileService->remove($result->image,$this->fileDir);
        $result->delete();

        return redirect()->route('admin.service.index');
    }
}
