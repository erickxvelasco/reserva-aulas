<div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo e(asset('material')); ?>/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
 
   
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      <?php echo e(__('Reserva de Aulas')); ?>

    </a>    
  </div>  
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item<?php echo e($activePage == 'reserva' ? ' active' : ''); ?>">
        <a class="nav-link" href=""> 
          <i class="material-icons">add</i>
            <p><?php echo e(__('Nueva Solicitud')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'table' ? ' active' : ''); ?>">
        <a class="nav-link" href="">
          <i class="material-icons">schedule</i>
            <p><?php echo e(__('Historial')); ?></p>
        </a>
      </li>      
      <li class="nav-item<?php echo e($activePage == 'table' ? ' active' : ''); ?>">
        <a class="nav-link" href="">
          <i class="material-icons">content_paste</i>
            <p><?php echo e(__('Mis Materias')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'typography' ? ' active' : ''); ?>">
        <a class="nav-link" href="">
          <i class="material-icons">library_books</i>
            <p><?php echo e(__('Aulas')); ?></p>
        </a>
      </li>      
      <li class="nav-item<?php echo e($activePage == 'notifications' ? ' active' : ''); ?>">
        <a class="nav-link" href="">
          <i class="material-icons">notifications</i>
          <p><?php echo e(__('Notificaciones')); ?></p>
        </a>
      </li>
      <hr>
      <li class="nav-item <?php echo e($activePage == 'profile'  ? ' active' : ''); ?>">
        
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">person_outline</i>
          <p><?php echo e(__('Cuenta')); ?>

            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
              <a class="nav-link" href="">
                <i class="material-icons">account_circle</i>
                <span class="sidebar-normal"><?php echo e(__('mi Cuenta')); ?> </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="material-icons">logout</i>
                <span class="sidebar-normal text-danger"> <?php echo e(__('Cerrar Sesón')); ?> </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
    </ul>
  </div>
</div>
<?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>