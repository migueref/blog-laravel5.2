@extends('admin.template.main')

@section('title','Editar usuario '.$category->name)

@section('content')
		{!! Form::open(['route' => ['admin.categories.update',$category->id], 'method'=>'PUT']) !!}
			<div class="form-group">
				{!! Form::label('name','Nombre') !!}
				{!! Form::text('name',$category->name,['class'=>'form-control','required','placeholder'=>'Nombre completo']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::submit('Guardar',['class'=>'btn btn-alert']) !!}				
				
			</div>
		{!! Form::close() !!}
@endsection