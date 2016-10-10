<div >
    <h3 class="alert alert-warning "><?php echo e(trans('app.title_categories')); ?></h3>
</div>
<div class="panel-body">
    <ul class="list-group">
        <?php foreach($categories as $category): ?>
          <li class="list-group-item">
              <span class="badge"><?php echo e($category->articles->count()); ?></span>
              <a href="<?php echo e(route('front.search.category',$category->name)); ?>">
                  <?php echo e($category->name); ?>

              </a>

          </li>
        <?php endforeach; ?>
    </ul>
</div>
<!--tags-->
<div >
    <h3 class="alert alert-warning">Tags1</h3>
</div>
<div class="panel-body">
    <ul class="list-group">
      <?php foreach($tags as $tag): ?>
        <li class="list-group-item">
            <span class="badge"><?php echo e($tag->articles->count()); ?></span>
            <a href="<?php echo e(route('front.search.tag',$tag->name)); ?>"><?php echo e($tag->name); ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
</div>
