@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'category/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Name</label>
            <input type="text" class="form-control" name = "name" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('category.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('category.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!}
        <br>
		<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ URL::action('CategoryController@edit', $category->id)}}" >Edit</a>
                        <a class="btn btn-danger btn-xs" href="{{ route('category/destroy',['id' => $category->id])}}" >Delete</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
	</div>
</div>
@endsection
