@extends('admin.template.main')

@section('title','Lista de articles')

@section('content')
	<a href="{{route('admin.articles.create')}} " class="btn btn-info">Registrar nuevo article</a><hr>
	<!--Buscador de articles-->
		
		{!! Form::open(['route'=>'admin.articles.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
			<div class="input-group">
				{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Buscar article','aria-describedby'=>'search'])!!}
				<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"aria-hidden="true"></span></span>				
			</div>
		{!! Form::close() !!}
	<!--Fin Buscador de articles-->
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Título</th>
			<th>Categoría</th>
			<th>User</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td>{{$article->id}} </td>
					<td>{{$article->title}} </td>
					<td>{{$article->category->name}} </td>
					<td>{{$article->user->name}} </td>
					
					
					<td> <a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Modificar</a> <a href="{{route('admin.articles.destroy',$article->id)}}" onclick ="return confirm('¿Seguro que desea eliminar?')"class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true">Eliminar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $articles->render() !!}

@endsection