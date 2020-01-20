<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::all();
        return view('pages.all_pages')->with('pages', $pages);
    }


    public function create()
    {
        return view('pages.create');
    }


    public function store(Request $request)
    {
        Page::create($request->all());
        return redirect('/pages')->with(['status' => 'New page was created successfully!']);
    }

    public function show(Page $page)
    {
        return view('pages.index')->with('page', $page);
    }

    public function edit(Page $page)
    {
        return view('pages.edit')->with('page', $page);
    }


    public function update(PageRequest $request, Page $page)
    {
        $page->update($request->all());
        return redirect('/pages')->with(['status' => 'Page was updated successfully!']);
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect('/pages')->with(['status' => 'Page was deleted successfully!']);
    }
}
