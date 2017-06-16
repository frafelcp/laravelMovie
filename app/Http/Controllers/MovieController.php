<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie as Movie;

class MovieController extends Controller
{
    public function index()
    {
    	$movies = Movie::all();
    	return \View::make('list', compact('movies'));
    }

    public function create()
    {
    	return \View::make('new');
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
    	return \View::make('update', compact('movie'));
    }

    public function update(Request $request)
    {
    	$movie = Movie::find($request->id);
    	$movie->name = $request->name;
    	$movie->description = $request->description;
    	$movie->save();
    	return redirect('movie');
    }
}
