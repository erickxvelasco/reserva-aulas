<div class="sidebar" data-color="orange" data-background-color="rose" data-image="<?php echo e(asset('material')); ?>/img/sansi.png">
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
      <li class="nav-item<?php echo e($activePage == 'solicitud.create' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('solicitud.create')); ?>"> 
          <i class="material-icons">add_box</i>
            <p><?php echo e(__('Nueva Solicitud')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'table' ? ' active' : ''); ?>">
        <a class="nav-link" href="">
          <i class="material-icons">work_history</i>
            <p><?php echo e(__('Historial')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'table' ? ' active' : ''); ?>">
        <a class="nav-link" href="">
          <i class="material-icons">science</i>
            <p><?php echo e(__('Mis Materias')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'typography' ? ' active' : ''); ?>">
        <a class="nav-link" href="">
          <i class="material-icons">store</i>
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
          
          <a class="nav-link" data-toggle="collapse" href="#cuentacollapse" aria-expanded="false">
            <i class="material-icons text-rose">perm_contact_calendar</i>
            <p class="text-rose"><b> <?php echo e(auth()->user()->nombres); ?></b>
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse " id="cuentacollapse">
            <ul class="nav">
              <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
                <a class="nav-link" href="">
                  <i class="material-icons ">settings</i>
                  <span class="sidebar-normal"><b><?php echo e(__('mi Cuenta')); ?> </b></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <i class="material-icons text-rose">exit_to_app</i>
                  <span class="sidebar-normal text-rose"><b> <?php echo e(__('Cerrar Sesión')); ?></b> </span>
                </a>
              </li>
            </ul>
          </div>
        </li>


    </ul>
  </div>
</div>
<?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/layouts/navbars/sidebar_estandar.blade.php ENDPATH**/ ?>