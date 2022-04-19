<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard()->check()): ?>
        <?php if(auth()->user()->estado==2): ?>
            <?php echo e(session()->get('abc','hello world')); ?>

           <?php echo e(auth()->logout()); ?>


            
        <?php endif; ?>
    <?php endif; ?>

<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-10 col-md-10">
        <br><br>
            <div data-color="orange"><div>
          <h1 class="text-dark text-center"><?php echo e(__('Bienvenido al Sistema de Reserva de Aulas')); ?></h1>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Reserva Aulas')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/welcome.blade.php ENDPATH**/ ?>