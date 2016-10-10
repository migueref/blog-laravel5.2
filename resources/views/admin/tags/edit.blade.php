@extends('admin.template.main')

@section('title','Editar tag '.$tag->name)

@section('content')
		{!! Form::open(['route' => ['admin.tags.update',$tag->id], 'method'=>'PUT']) !!}
			<div class="form-group">
				{!! Form::label('name','Nombre') !!}
				{!! Form::text('name',$tag->name,['class'=>'form-control','required','placeholder'=>'Nombre completo']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::submit('Guardar',['class'=>'btn btn-alert']) !!}				
				
			</div>
		{!! Form::close() !!}
@endsection