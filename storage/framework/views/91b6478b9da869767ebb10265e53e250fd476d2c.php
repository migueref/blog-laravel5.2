

<?php $__env->startSection('title','Lista de imágenes'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
     <?php foreach($images as $image): ?>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="/images/articles/<?php echo e($image->name); ?>" class="col-xs-12"alt="img-responsive" />
                </div>
                <div class="panel-footer">
                    <?php echo e($image->article->title); ?>

                </div>
            </div>
        </div>
     <?php endforeach; ?>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>