<?php $__env->startSection('title','Inicio de sesión'); ?>

<?php $__env->startSection('content'); ?>
	<?php echo Form::open(['route' => 'admin.auth.login', 'method' => 'POST']); ?>

		<div class="col-md-12">
			<div class="form-group ">
				<?php echo Form::label('email','Correo electrónico' ); ?>

				<?php echo Form::email('email',null,['class'=>'form-control','placeholder'=>'example@example.com' ] ); ?>

			</div>
			<div class="form-group ">
				<?php echo Form::label('password','Password' ); ?>

				<?php echo Form::password('password',['class'=>'form-control','placeholder'=>'*******' ] ); ?>

			</div>
			
		</div>
		
		<div class="form-group ">
			<?php echo Form::submit('Acceder',['class'=>'btn btn-primary'] ); ?>

		</div>
	<?php echo Form::close(''); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>