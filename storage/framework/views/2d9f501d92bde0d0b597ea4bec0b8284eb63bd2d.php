<div class="wrapper ">
    <?php if(auth()->user()->tipo==1): ?>
        <?php echo $__env->make('layouts.navbars.sidebar_estandar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('layouts.navbars.sidebar_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

  <div class="main-panel">

    <?php echo $__env->make('layouts.navbars.navs.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</div>
<?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/layouts/page_templates/auth.blade.php ENDPATH**/ ?>