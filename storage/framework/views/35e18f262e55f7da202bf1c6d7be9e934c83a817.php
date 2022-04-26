<!-- Navbar -->
<nav class="navbar navbar-expand-lg  navbar-absolute fixed-top text-dark bg-white" style="background-color: rgb(238, 180, 180);"> 
  <div class="container">
    <a href="/">
    <div class="navbar-wrapper">
    <img src="<?php echo e(asset('material')); ?>/img/fcyt.jfif" class="img-thumbnail" alt="..." height="45" width="45">
      <h4 style="position:relative; top:5px;"><b><?php echo e($title); ?></b></h4>
    </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav bg-white">
        <li class="nav-item">
          <a href="<?php echo e(route('login')); ?>" class="nav-link active border border-dark text-dark "name="login">
            <i class="material-icons text-rose">fingerprint</i> <?php echo e(__('Acceder')); ?>

          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/layouts/navbars/navs/guest.blade.php ENDPATH**/ ?>