@extends('admin.template.main')

@section('title','Agregar artículo')

@section('content')
		{!! Form::open(['route'=>'admin.articles.store','method'=>'POST', 'files'=>true]) !!}
			<div class="form-group">
				{!! Form::label('title','Título') !!}
				{!! Form::text('title',null,['class'=>'form-control','required','placeholder'=>'Título del artículo']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('category_id','Categoria') !!}
				{!! Form::select('category_id',$categories,null,['class'=>'form-control select-category col-xs-12','required','placeholder'=>'Seleccione una categoría']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('content','Contenido') !!}
				{!! Form::textarea('content',null,['class'=>'form-control textarea-content','required','placeholder'=>'Escriba su contenido']) !!}
			</div><div class="form-group">
				{!! Form::label('image','Imagen') !!}
				{!! Form::file('image',null,['class'=>'dropzone']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tags','Tags') !!}
				{!! Form::select('tags[]',$tags,null,['tags'=>'id','class'=>'form-control select-tag','required','multiple']) !!}
			</div>
			<div class="form-group">
				<div class="col-xs-10"></div>
				{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
@endsection
@section('js')
	<script>
		$('.select-tag').chosen({
			placeholder_text_multiple: 'Seleccione máximo tres tags',
			max_selected_options:3,
			no_results_text:'No se encontraron tags'
		} );
		$('.select-category').chosen({

		} );
		$('.textarea-content').trumbowyg({

		} );

	</script>
@endsection
