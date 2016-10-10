<?php $__env->startSection('title','Agregar categoría'); ?>

<?php $__env->startSection('content'); ?>
	
		<?php echo Form::open(['route'=>'admin.categories.store','method'=>'POST']); ?>

			<div class="form-group">
				<?php echo Form::label('name','Nombre'); ?>

				<?php echo Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Nombre categoría']); ?>

			</div>
			
			<div class="form-group">
				<?php echo Form::submit('Guardar',['class'=>'btn btn-primary']); ?>				
				
			</div>
		<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>