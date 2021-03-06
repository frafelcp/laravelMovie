@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'movie.store', 'method' => 'post', 'novalidate']) !!}
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
												@foreach($categoria as $catego)
													<option value="{{$catego->id}}">{{$catego->name}}</option>
												@endforeach
											</select>
                  </div>
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
	{{$categoria}}
</div>
@endsection
