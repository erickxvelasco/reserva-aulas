<?php echo $__env->make('layouts.navbars.navs.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="green"
  style="background-color:rgb(255, 252, 252);background-image: url('<?php echo e(asset('material')); ?>/img/login4.png');
  background-size: cover;
   background-position: left top;
   align-items: center;" data-color="rose">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</div>
<?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/layouts/page_templates/guest.blade.php ENDPATH**/ ?>