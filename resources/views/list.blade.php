@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'movie/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Name</label>
            <input type="text" class="form-control" name = "name" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('movie.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('movie.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!}
        <br>
		<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>{{ $movie->category_id }}-{{$movie->category->name}}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ URL::action('MovieController@edit', $movie->id)}}" >Edit</a>
                        <a class="btn btn-danger btn-xs" href="{{ route('movie/destroy',['id' => $movie->id])}}" >Delete</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('category.index') }}" class="btn btn-primary">Categorias</a>
</div>
@endsection
