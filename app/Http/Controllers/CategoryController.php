<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Page;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.all_categories')->with('categories', $categories);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect('/categories')->with(['status' => 'Category was created successfully!']);
    }

    public function show(Category $category)
    {
        $aboutUsArticle = Page::where('slug', 'about_us')->first();
        $categories = Category::all();

        return view('categories.index')->with(compact('category', 'categories' ,'aboutUsArticle'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit')->with('category', $category);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect('/categories')->with(['status' => 'Category was updated successfully!']);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/categories')->with(['status' => 'Category was deleted successfully!']);
    }
}
