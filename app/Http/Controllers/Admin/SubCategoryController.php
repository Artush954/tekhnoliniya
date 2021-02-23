<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Services\FileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SubCategoryController extends Controller
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
        $results = SubCategory::orderBy('title', 'asc')->with('category')->get();
        return view('admin.subcategory.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $categories =  Category::all();
        return view('admin.subcategory.create',compact('categories'));
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
            'category_id' => 'required',
            'image' => 'required',
            'slug' => 'required',

        ]);
        $image = $this->fileService->upload($request->file('image'));
        $validated['image'] = $image;

        $page = SubCategory::create($validated);

        if (array_key_exists('btn_create_and_edit',$request->all())) {
            return redirect()->route('admin.subcategory.edit', ['subcategory' => $page->id]);
        } elseif (array_key_exists('btn_create_and_list',$request->all())) {
            return redirect()->route('admin.subcategory.index');
        } else {
            return redirect()->route('admin.subcategory.create');
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
        $result = SubCategory::findOrFail($id);
        $categories = Category::all();

        return view('admin.subcategory.edit', compact('result','categories'));
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
        $validated= $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',

            'slug' => 'required',

        ]);
        $result= SubCategory::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->fileService->upload($request->file('image'));
            $this->fileService->remove($result->image);
            $validated['image'] = $image;
        }
        $result->update($validated);
        if (array_key_exists('btn_update_and_edit',$request->all())) {
            return redirect()->route('admin.subcategory.edit', ['subcategory' => $result->id]);
        } elseif (array_key_exists('btn_update_and_list',$request->all())) {
            return redirect()->route('admin.subcategory.index');
        } else {
            return redirect()->route('admin.subcategory.index');
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
        $result = SubCategory::findOrFail($id);
        $this->fileService->remove($result->image);
        $result->delete();

        return redirect()->route('admin.subcategory.index');
    }
}
