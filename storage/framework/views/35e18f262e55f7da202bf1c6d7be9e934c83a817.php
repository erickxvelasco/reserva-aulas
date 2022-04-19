<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
  <div class="container">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><?php echo e($title); ?></a> 
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">        
        <li class="nav-item<?php echo e($activePage == 'login' ? ' active' : ''); ?>">
          <a href="<?php echo e(route('login')); ?>" class="nav-link">
            <i class="material-icons">fingerprint</i> <?php echo e(__('Acceder')); ?>

          </a>
        </li>        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --><?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/layouts/navbars/navs/guest.blade.php ENDPATH**/ ?>