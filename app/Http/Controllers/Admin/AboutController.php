<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\AboutGallery;
use App\Services\FileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AboutController extends Controller
{
    private $fileDir = '/images/gallery/';

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
        $results= AboutUs::all();
        return view('admin.about.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   return view('admin.about.create');
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
            'description'=>'required',
        ]);
        $page = AboutUs::create($validated);

        if ($request->hasFile('gallery')) {
            $gallery = $this->fileService->multipleUpload($request->file('gallery'), $this->fileDir);
            $page->gallery()->createMany($gallery);
        }

        if (array_key_exists('btn_create_and_edit', $request->all())) {
            return redirect()->route('admin.about.edit', ['about' => $page->id]);
        } elseif (array_key_exists('btn_create_and_list', $request->all())) {
            return redirect()->route('admin.about.index');
        } else {
            return redirect()->route('admin.about.create');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = AboutUs::findOrFail($id);

        return view('admin.about.edit',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validated = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',

        ]);

        $result = AboutUs::findOrFail($id);



        if ($request->hasFile('gallery')) {
            $gallery = $this->fileService->multipleUpload($request->file('gallery'), $this->fileDir);
            $result->gallery()->createMany($gallery);
        }
        $result->update($validated);

        if (array_key_exists('btn_update_and_edit', $request->all())) {
            return redirect()->route('admin.about.edit', ['about' => $result->id]);
        } elseif (array_key_exists('btn_update_and_list', $request->all())) {
            return redirect()->route('admin.about.index');
        } else {
            return redirect()->route('admin.about.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $result = AboutUs::findOrFail($id);
        $result->delete();

        return redirect()->route('admin.about.index');
    }

    /**
     * @param Request $request
     */
    public function removeImage(Request $request)
    {
        try {
            $gallery = AboutGallery::findorFail($request->id);
            $this->fileService->remove($gallery->image, $this->fileDir);
            $gallery->delete();

            return response()->json([
                'status' => true
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
