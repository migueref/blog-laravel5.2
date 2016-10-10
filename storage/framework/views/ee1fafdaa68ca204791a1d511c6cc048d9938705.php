<?php $__env->startSection('title','Agregar artículo'); ?>

<?php $__env->startSection('content'); ?>
		<?php echo Form::open(['route'=>'admin.articles.store','method'=>'POST', 'files'=>true]); ?>

			<div class="form-group">
				<?php echo Form::label('title','Título'); ?>

				<?php echo Form::text('title',null,['class'=>'form-control','required','placeholder'=>'Título del artículo']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::label('category_id','Categoria'); ?>

				<?php echo Form::select('category_id',$categories,null,['class'=>'form-control select-category col-xs-12','required','placeholder'=>'Seleccione una categoría']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::label('content','Contenido'); ?>

				<?php echo Form::textarea('content',null,['class'=>'form-control textarea-content','required','placeholder'=>'Escriba su contenido']); ?>

			</div><div class="form-group">
				<?php echo Form::label('image','Imagen'); ?>

				<?php echo Form::file('image',null,['class'=>'dropzone']); ?>

			</div>

			<div class="form-group">
				<?php echo Form::label('tags','Tags'); ?>

				<?php echo Form::select('tags[]',$tags,null,['tags'=>'id','class'=>'form-control select-tag','required','multiple']); ?>

			</div>
			<div class="form-group">
				<div class="col-xs-10"></div>
				<?php echo Form::submit('Guardar',['class'=>'btn btn-primary']); ?>

			</div>
		<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>