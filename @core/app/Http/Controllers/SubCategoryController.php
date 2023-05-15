<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = SubCategory::latest()->get();
        return view('backend.pages.important-links.sub-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.pages.important-links.sub-category.create', compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories',
            'slug' => 'required|alpha_dash|unique:categories',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.subcategory.new')->withErrors($validator)->withInput();
        } else {
            $category = new SubCategory();
            $category->name = $request->name;
            $category->slug = SlugService::createSlug(SubCategory::class, 'slug', $request->name);
            $category->parent_id = $request->category;
            $category->save();

            return redirect()->back()->with([
                'msg' => __('New Category Added...'),
                'type' => 'success'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = SubCategory::find($id);
        return view('backend.pages.important-links.sub-category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = SubCategory::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.subcategory.edit', $category->id)->withErrors($validator)->withInput();
        } else {
            $category->name = $request->name;
            $category->parent_id = $request->id;
            $category->save();

            return redirect()->route('admin.subcategories')->with([
                'msg' => __('Category Updated...'),
                'type' => 'success'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = SubCategory::find($id);
        $category->delete();
        return redirect()->back()->with([
            'msg' => __('Category Deleted...'),
            'type' => 'danger'
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(SubCategory::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
