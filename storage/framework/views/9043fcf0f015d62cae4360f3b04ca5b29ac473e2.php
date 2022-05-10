

<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard()->check()): ?>

        <?php if(auth()->user()->estado==2): ?>

        <?php echo e(Session::flash('abc', 'la cuenta esta deshabilitada, pongase en contacto con un administrador*' )); ?>


            
           <?php echo e(auth()->logout()); ?>


            
        <?php endif; ?>
    <?php endif; ?>

<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-12 col-md-12">
        <br><br>
        <div class="alert alert-rose rounded">
            <h1 class="display-2 text-white text-center"><?php echo e(__('Bienvenido al Sistema de Reserva de Aulas')); ?></h1>
        </div>
      </div>
  </div>
  <br>
  <br>

  <div class="row">
      <div class="col-xl-6">
        <div class="col-12">
            <div class="card">
              <div class="card-header card-header-tabs card-header-rose">
                <div class="nav-tabs-navigation">
                    <span class="nav-tabs-title " style="font-size: 160%">Asigne las mejores aulas
                        para sus eventos</span>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                    <p style="font-size: 150%">
                        Asigne las mejores aulas para cada uno de sus eventos
                        Este sistema contiene funcionalidades que se encargan de
                        asignar aulas a los eventos programados conforme a las
                        características del espacio requerido y los objetivos de cada usuario.
                    </p>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-xl-6">
        <div class="col-12">
            <div class="card">
              <div class="card-header card-header-tabs card-header-primary">
                <div class="nav-tabs-navigation">
                    <span class="nav-tabs-title " style="font-size: 160%">Ventajas del sistema de asignación de aulas</span>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                    <p style="font-size: 150%">
                        La funcionalidad de asignación de aulas le permite a la
                        Universidad lograr mayores ganancias de productividad resolviendo
                        en tan solo minutos una tarea de una semana, aligerando al personal
                        para cumplir otras tareas productivas.
                    </p>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Reserva Aulas')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/welcome.blade.php ENDPATH**/ ?>