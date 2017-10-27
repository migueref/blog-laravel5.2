@extends('admin.template.main')
@section('title','Acceso al blog')

@section('content')
	{!!Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
		<div class="row" style="height:80vh!important;">
			<div class="col-md-3"></div>
			<div class="col-md-6 card">
				<div class="form-group ">
					{!! Form::label('email','Correo electrónico' ) !!}
					{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@example.com' ] ) !!}
				</div>
				<div class="form-group ">
					{!! Form::label('password','Password' ) !!}
					{!! Form::password('password',['class'=>'form-control','placeholder'=>'*******' ] ) !!}
				</div>
				<div class="form-group ">
					{!! Form::submit('Acceder',['class'=>'btn btn-primary'] ) !!}
				</div>
			</div>
			<div class="col-md-3"></div>

		</div>


	{!!Form::close('') !!}
@endsection
