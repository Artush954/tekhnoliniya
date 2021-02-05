<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Services\FileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PageController extends Controller
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
        $results = Page::orderBy('title', 'asc')->get();
        return view('admin.page.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('admin.page.create');
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
            'key' => 'required',
            'title' => 'required',
            'description' => 'required',
            'meta_keys' => 'required',
            'meta_desc' => 'required',
            'image' => 'required',
        ]);
        $image = $this->fileService->upload($request->file('image'));
        $validated['image'] = $image;

        $page = Page::create($validated);

        if (array_key_exists('btn_create_and_edit',$request->all())) {
            return redirect()->route('admin.page.edit', ['page' => $page->id]);
        } elseif (array_key_exists('btn_create_and_list',$request->all())) {
            return redirect()->route('admin.page.index');
        } else {
            return redirect()->route('admin.page.create');
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
        $result = Page::findOrFail($id);

        return view('admin.page.edit', compact('result'));
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
            'key' => 'required',
            'title' => 'required',
            'description' => 'required',
            'meta_keys' => 'required',
            'meta_desc' => 'required',
        ]);

        $result = Page::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $this->fileService->upload($request->file('image'));
            $this->fileService->remove($result->image);
            $validated['image'] = $image;
        }

        $page = $result->update($validated);

        if (array_key_exists('btn_update_and_edit',$request->all())) {
            return redirect()->route('admin.page.edit', ['page' => $page->id]);
        } elseif (array_key_exists('btn_update_and_list',$request->all())) {
            return redirect()->route('admin.page.index');
        } else {
            return redirect()->route('admin.page.index');
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
        $result = Page::findOrFail($id);
        $this->fileService->remove($result->image);
        $result->delete();

        return redirect()->route('admin.page.index');
    }
}
