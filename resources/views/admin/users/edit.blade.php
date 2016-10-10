@extends('admin.template.main')

@section('title','Editar usuario '.$user->name)

@section('content')
		{!! Form::open(['route' => ['admin.users.update',$user->id], 'method'=>'PUT']) !!}
			<div class="form-group">
				{!! Form::label('name','Nombre') !!}
				{!! Form::text('name',$user->name,['class'=>'form-control','required','placeholder'=>'Nombre completo']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('email','Correo electrónico') !!}
				{!! Form::email('email',$user->email,['class'=>'form-control','required','placeholder'=>'example@example.com']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('type','Tipo') !!}				
				{!! Form::select('type',[''=>'Selecciona privilegios de usuario','member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Guardar',['class'=>'btn btn-alert']) !!}				
				
			</div>
		{!! Form::close() !!}
@endsection