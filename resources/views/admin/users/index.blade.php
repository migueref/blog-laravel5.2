@extends('admin.template.main')

@section('title','Lista de usuarios')

@section('content')
	<a href="{{route('admin.users.create')}} " class="btn btn-info">Registrar nuevo usuario</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Email</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->id}} </td>
					<td>{{$user->name}} </td>
					<td>
						@if($user->type=='admin')
							<span class="label label-danger">{{$user->type}} </span>
						@else
							<span class="label label-primary">{{$user->type}} </span>
						@endif
					 </td>
					<td>{{$user->email}} </td>
					<td> <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Modificar</a> <a href="{{route('admin.users.destroy',$user->id)}}" onclick ="return confirm('¿Seguro que desea eliminar?')"class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true">Eliminar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}

@endsection