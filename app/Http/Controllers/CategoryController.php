<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',[
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create',[
            'title' => "CREATE PAGE"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validations runs here

        $newCategory = new Category();
        $newCategory->title = $request->title;
        $newCategory->description = $request->description;
        $newCategory->type = $request->type;
        $newCategory->parent_id = $request->parent_id;
        $newCategory->save();

        return redirect()->back()->with('success', "Başarıyla category eklendii");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.category.show',[
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $newCategory = Category::find($request->category_id);
        $newCategory->title = $request->title;
        $newCategory->description = $request->description;
        $newCategory->type = $request->type;
        $newCategory->parent_id = $request->parent_id;
        $newCategory->save();

        return redirect()->back()->with('success', "Başarıyla category güncellendi");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect(route("admin.category.index"));
    }
}
