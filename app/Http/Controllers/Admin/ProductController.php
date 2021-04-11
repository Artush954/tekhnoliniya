<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Size;
use App\Models\SubCategory;
use App\Services\FileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
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
        $results = Product::orderBy('title', 'asc')->get();
        return view('admin.product.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        $categories = SubCategory::all();
        $size = Size::all();

        return view('admin.product.create', compact('categories', 'size'));
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
            'sub_category_id' => 'required',
            'price' => 'required',
            'status' => 'required',
            'color_price' => 'required',
            'size_id' => 'required',
            'amount' => 'required',
            'image' => 'required',
            'marka' => 'required',
            'gallery' => 'required'
        ]);

        $image = $this->fileService->upload($request->file('image'), '/images/', ['w' => 280, 'h' => 280]);
        $validated['image'] = $image;

        $page = Product::create($validated);

        if ($request->hasFile('gallery')) {
            $gallery = $this->fileService->multipleUpload($request->file('gallery'), $this->fileDir);
            $page->gallery()->createMany($gallery);
        }

        if (array_key_exists('btn_create_and_edit', $request->all())) {
            return redirect()->route('admin.product.edit', ['product' => $page->id]);
        } elseif (array_key_exists('btn_create_and_list', $request->all())) {
            return redirect()->route('admin.product.index');
        } else {
            return redirect()->route('admin.product.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
        $result = Product::findOrFail($id);
        $categories = SubCategory::all();
        $size = Size::all();

        return view('admin.product.edit', compact('categories', 'result', 'size'));
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
            'sub_category_id' => 'required',
            'price' => 'required',
            'status' => 'required',
            'color_price' => 'required',
            'size_id' => 'required',
            'amount' => 'required',
            'image' => '',
            'marka' => 'required',
            'gallery' => ''
        ]);

        $result = Product::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $this->fileService->upload($request->file('image'), '/images/', ['w' => 280, 'h' => 280]);
            $this->fileService->remove($result->image);
            $validated['image'] = $image;
        }

        if ($request->hasFile('gallery')) {
            $gallery = $this->fileService->multipleUpload($request->file('gallery'), $this->fileDir);
            $result->gallery()->createMany($gallery);
        }
        $result->update($validated);

        if (array_key_exists('btn_update_and_edit', $request->all())) {
            return redirect()->route('admin.product.edit', ['product' => $result->id]);
        } elseif (array_key_exists('btn_update_and_list', $request->all())) {
            return redirect()->route('admin.product.index');
        } else {
            return redirect()->route('admin.product.create');
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
        $result = Product::findOrFail($id);
        $this->fileService->remove($result->image);

        if ($result->gallery) {
            foreach ($result->gallery as $item) {
                $this->fileService->remove($item->image);
            }
        }

        $result->delete();

        return redirect()->route('admin.product.index');
    }

    /**
     * @param Request $request
     */
    public function removeImage(Request $request)
    {
        try {
            $gallery = ProductGallery::findorFail($request->id);
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
