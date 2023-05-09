<?php $__env->startSection('title'); ?> Create Category <?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>

<div class="col-md-8">

  <?php if(session('status')): ?>
    <div class="alert alert-success">
      <?php echo e(session('status')); ?>

    </div>
  <?php endif; ?> 

  <form 
    enctype="multipart/form-data" 
    class="bg-white shadow-sm p-3" 
    action="<?php echo e(route('categories.store')); ?>" 
    method="POST">

    <?php echo csrf_field(); ?>

    <label>Category name</label><br>
    <input 
      type="text" 
      class="form-control <?php echo e($errors->first('name') ? "is-invalid" : ""); ?>"
      value="<?php echo e(old('name')); ?>"
      name="name">
    <div class="invalid-feedback">
      <?php echo e($errors->first('name')); ?>

    </div>
    <br>
    
    <label>Category image</label>
    <input 
      type="file" 
      class="form-control <?php echo e($errors->first('image') ? "is-invalid" : ""); ?>"
      name="image">
    <div class="invalid-feedback">
      <?php echo e($errors->first('image')); ?>

    </div>
    
    <br>

    <input 
      type="submit" 
      class="btn btn-primary" 
      value="Save">

  </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larashop\resources\views/categories/create.blade.php ENDPATH**/ ?>