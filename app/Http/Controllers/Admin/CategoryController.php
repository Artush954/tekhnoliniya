<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\FileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CategoryController extends Controller
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
        $results = Category::where('status','1')->orderBy('title', 'asc')->get();
        return view('admin.categorys.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'title' => 'required',
            'slug'=>'required',
            'image'=>'required',
        ]);
        $image = $this->fileService->upload($request->file('image'), $this->fileDir);

        $validated['image'] = $image;
        $category = Category::create($validated);

        if (array_key_exists('btn_create_and_edit', $request->all())) {
            return redirect()->route('admin.category.edit', ['category' => $category->id]);
        } elseif (array_key_exists('btn_create_and_list', $request->all())) {
            return redirect()->route('admin.category.index');
        } else {
            return redirect()->route('admin.category.create');
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
     * @param int $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
        $result = Category::findOrFail($id);

        return view('admin.categorys.edit', compact('result'));
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
            'image'=>'required'


        ]);

        $result = Category::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->fileService->upload($request->file('image'),$this->fileDir);
//            $this->fileService->remove($result->image);
            $validated['image'] = $image;
        }

        $categorys = $result->update($validated);

        if (array_key_exists('btn_update_and_edit', $request->all())) {
            return redirect()->route('admin.category.edit', ['category' => $result->id]);
        } elseif (array_key_exists('btn_update_and_list', $request->all())) {
            return redirect()->route('admin.category.index');
        } else {
            return redirect()->route('admin.category.index');
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
        $result = Category::findOrFail($id);
        $this->fileService->remove($result->image,$this->fileDir);
        $result->delete();

        return redirect()->route('admin.category.index');
    }
}
