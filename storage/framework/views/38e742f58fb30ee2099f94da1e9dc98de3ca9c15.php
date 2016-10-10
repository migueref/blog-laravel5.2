<?php $__env->startSection('title','Editar tag '.$tag->name); ?>

<?php $__env->startSection('content'); ?>
		<?php echo Form::open(['route' => ['admin.tags.update',$tag->id], 'method'=>'PUT']); ?>

			<div class="form-group">
				<?php echo Form::label('name','Nombre'); ?>

				<?php echo Form::text('name',$tag->name,['class'=>'form-control','required','placeholder'=>'Nombre completo']); ?>

			</div>
			
			<div class="form-group">
				<?php echo Form::submit('Guardar',['class'=>'btn btn-alert']); ?>				
				
			</div>
		<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>