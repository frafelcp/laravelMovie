<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie as Movie;
use App\Category as Category;

class MovieController extends Controller
{
    public function index()
    {
    	$movies = Movie::all();
    	return \View::make('list', compact('movies'));
    }

    public function create()
    {
      $categoria = Category::get();
    	return \View::make('new', compact('categoria'));
    }

    public function store(Request $request)
    {
    	$movie = new Movie;
    	$movie->create($request->all());
    	return redirect('movie');
    }

    public function edit($id)
    {
    	$movie = Movie::find($id);
      $categorias = Category::get();
    	return \View::make('update', compact('movie', 'categorias'));
    }

    public function update(Request $request)
    {
    	$movie = Movie::find($request->id);
    	$movie->name = $request->name;
    	$movie->description = $request->description;
    	$movie->update();
    	return redirect('movie');
    }

    public function destroy($id)
    {
    	$movie = Movie::find($id);
    	$movie->delete();
    	return redirect()->back();
    }

    public function search(Request $request)
    {
    	$movies = Movie::where('name', 'like', '%'.$request->name.'%')->get();
    	return \View::make('list', compact('movies'));
    }
}
