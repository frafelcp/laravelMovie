<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category as Category;

class CategoryController extends Controller
{
    public function index()
    {
      $categories = Category::all();
    	return \View::make('listc', compact('categories'));
    }

    public function create()
    {
      return \View::make('newc');
    }

    public function store(Request $request)
    {
      $category = new Category;
    	$category->create($request->all());
    	return redirect('category');
    }

    public function edit($id)
    {
      $category = Category::find($id);
    	return \View::make('updatec', compact('category'));
    }

    public function update(Request $request)
    {
      $category = Category::find($request->id);
    	$category->name = $request->name;
    	$category->description = $request->description;
    	$category->update();
    	return redirect('category');
    }

    public function destroy($id)
    {
      $category = Category::find($id);
    	$category->delete();
    	return redirect()->back();
    }

    public function search(Request $request)
    {
      $categories = Category::where('name', 'like', '%'.$request->name.'%')->get();
    	return \View::make('listc', compact('categories'));
    }
}
