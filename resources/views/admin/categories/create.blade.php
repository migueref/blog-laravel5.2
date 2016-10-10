@extends('admin.template.main')

@section('title','Agregar categoría')

@section('content')
	
		{!! Form::open(['route'=>'admin.categories.store','method'=>'POST']) !!}
			<div class="form-group">
				{!! Form::label('name','Nombre') !!}
				{!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Nombre categoría']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}				
				
			</div>
		{!! Form::close() !!}
@endsection