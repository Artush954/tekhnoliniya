<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\FileService;
use Illuminate\Http\Response;
use Illuminate\View\View;


class SliderController extends Controller
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
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $results = Slider::all();
        return view('admin.slider.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $position =  Slider::max('position')+1;
        return view('admin.slider.create',compact('position'));
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
            'position'=>'required',
            'title' => 'required',
            'short_text' => 'required',
            'image' => 'required',
        ]);

        $image = $this->fileService->upload($request->file('image'));
        $validated['image'] = $image;

        $page = Slider::create($validated);

        if (array_key_exists('btn_create_and_edit',$request->all())) {
            return redirect()->route('admin.slider.edit', ['slider' => $page->id]);
        } elseif (array_key_exists('btn_create_and_list',$request->all())) {
            return redirect()->route('admin.slider.index');
        } else {
            return redirect()->route('admin.slider.create');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Slider::findOrFail($id);

        return view('admin.slider.edit', compact('result'));
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
            'position'=>'required',
            'title' => 'required',
            'short_text' => 'required',
        ]);

        $result = Slider::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $this->fileService->upload($request->file('image'));
            $this->fileService->remove($result->image);
            $validated['image'] = $image;
        }

        $result->update($validated);

        if (array_key_exists('btn_update_and_edit',$request->all())) {
            return redirect()->route('admin.slider.edit', ['slider' => $result->id]);
        } elseif (array_key_exists('btn_update_and_list',$request->all())) {
            return redirect()->route('admin.slider.index');
        } else {
            return redirect()->route('admin.slider.index');
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
        $result = Slider::findOrFail($id);
        $this->fileService->remove($result->image);
        $result->delete();

        return redirect()->route('admin.slider.index');
    }
}
