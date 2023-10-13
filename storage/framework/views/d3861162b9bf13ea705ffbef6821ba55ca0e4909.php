
<?php $__env->startSection('content'); ?>
<div style="margin-top: 10%;">
  <div class="text-center " >
    <h2>News create</h2>
  </div>
  <div class="container" style="border: 1cm">

  <form  action="<?php echo e(url('/blog')); ?>" method="POST">
  <?php echo csrf_field(); ?>

      <div class="form-group  mt-4"> <h3>Title </h3>
    <Input size="50"  name="title" height="" placeholder="Title"/>
  </div>
  <div class="form-group col-md-6  mt-4">
    <h3>Description</h3>
    <Input size="100"  name="info" height="20" placeholder="Write here " style="height: 600px" />
  </div>
  <div class="form-group mt-4"><h3>Attach File (image/Video)</h3>
    <Input size="10" name="file" type="file" height="20" />
  </div>

  <div class="form-group mt-4"><h3>Your Name</h3>
    <Input size="10" name="name" type="name" height="20" />
  </div>

  <div class="form-group mt-4"><h3>Moblie number</h3>
    <Input size="10" name="Phone" maxlength="10" type="name" height="20" />
  </div>

    <div class="form-group mt-4"><h3>email</h3>
    <Input size="10" name="email" type="email" height="20" />
  </div>

  <div class="text-center  mb-4">
    <button type="submit" id=""   class="btn btn-primary btn-lg">submit</button>
  </div>
  </form>
</div>
</div>
 
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RajasthanUjala\resources\views/news.blade.php ENDPATH**/ ?>