@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($movie,['method'=>'PUT', 'route'=>['movie.update', $movie->id], 'novalidate']) !!}
				{!! Form::hidden('id', $movie->id) !!}
								<div class="form-group">
											{!! Form::label('full_name', 'Nombre') !!}
											{!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
									</div>

                  <div class="form-group">
                      {!! Form::label('email', 'Descripci&oacute;n') !!}
                      {!! Form::text('description', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>

									<div class="form-group">
                      {!! Form::label('category', 'Categoria') !!}
                      <select name="category_id">
												@foreach($categorias as $catego)
													@if($catego->id == $movie->category_id)
														<option value="{{$catego->id}}" selected>{{$catego->name}}</option>
													@else
														<option value="{{$catego->id}}">{{$catego->name}}</option>
													@endif
												@endforeach
											</select>
                  </div>

                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
