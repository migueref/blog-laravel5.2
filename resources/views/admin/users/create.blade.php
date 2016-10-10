@extends('admin.template.main')

@section('title','Crear usuario')

@section('content')
	
		{!! Form::open(['route'=>'admin.users.store','method'=>'POST']) !!}
			<div class="form-group">
				{!! Form::label('name','Nombre') !!}
				{!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Nombre completo']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('email','Correo electrónico') !!}
				{!! Form::email('email',null,['class'=>'form-control','required','placeholder'=>'example@example.com']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('password','Contraseña') !!}
				{!! Form::password('password',['class'=>'form-control','required','placeholder'=>'*******']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('type','Tipo') !!}				
				{!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control','placeholder'=>'Selecciona privilegios de usuario','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}				
				
			</div>
		{!! Form::close() !!}
@endsection