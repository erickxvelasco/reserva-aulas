<div class="sidebar" data-color="orange" data-background-color="green" data-image="<?php echo e(asset('material')); ?>/img/sansi.png">
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
              <i class="material-icons">all_inbox</i>
                <p><?php echo e(__('Solicitudes Recibidas')); ?></p>
            </a>
          </li>
          <li class="nav-item<?php echo e($activePage == 'table' ? ' active' : ''); ?>">
            <a class="nav-link" href="">
              <i class="material-icons">schedule</i>
                <p><?php echo e(__('Historial de reservas')); ?></p>
            </a>
          </li>


        <li class="nav-item <?php echo e((!strpos($activePage,'user')) ? ' active' : ''); ?>" >
            
            <a class="nav-link" data-toggle="collapse" href="#usercollapse" aria-expanded="false">
              <i class="material-icons">manage_accounts</i>
              <p><?php echo e(__('Usuarios')); ?>

                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse <?php echo e((!strpos($activePage,'user')) ? ' show' : ''); ?>" id="usercollapse">
              <ul class="nav">
                <li class="nav-item<?php echo e(($activePage == 'user.index'|| $activePage == 'user.edit') ? ' active' : ''); ?>">
                  <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                    <i class="material-icons">list_alt</i>
                    <span class="sidebar-normal"><?php echo e(__('Listar Usuarios')); ?> </span>
                  </a>
                </li>
                <li class="nav-item <?php echo e($activePage == 'user.create' ? ' active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('user.create')); ?>">
                    <i class="material-icons">person_add_alt</i>
                    <span class="sidebar-normal"> <?php echo e(__('Registrar Usuario')); ?> </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item " >
            
            <a class="nav-link" data-toggle="collapse" href="#materiascollapse" aria-expanded="false">
              <i class="material-icons">table_chart</i>
              <p><?php echo e(__('Materias y grupos')); ?>

                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="materiascollapse">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="material-icons">science</i>
                    <span class="sidebar-normal"><?php echo e(__('Administrar Materias')); ?> </span>
                  </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                    <i class="material-icons">pages</i>
                    <span class="sidebar-normal"> <?php echo e(__('Administrar Grupos')); ?> </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item " >
            
            <a class="nav-link" data-toggle="collapse" href="#aulascollapse" aria-expanded="false">
              <i class="material-icons">store</i>
              <p><?php echo e(__('Aulas')); ?>

                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="aulascollapse">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="material-icons">list_alt</i>
                    <span class="sidebar-normal"><?php echo e(__('Listar Aulas')); ?> </span>
                  </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                    <i class="material-icons">add_business</i>
                    <span class="sidebar-normal"> <?php echo e(__('Registrar Aulas')); ?> </span>
                  </a>
                </li>
              </ul>
            </div>
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
<?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/layouts/navbars/sidebar_admin.blade.php ENDPATH**/ ?>