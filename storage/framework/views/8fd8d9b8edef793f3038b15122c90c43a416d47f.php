

<?php $__env->startSection('content'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-default bg-dark">
            <h4 class="card-title mt-0"> Usuarios</h4>
            <p class="card-category"> Listado de usuarios del sistema</p>
          </div>
          <?php if(session('status')): ?>
          <div class="alert alert-default alert-with-icon bg-success" data-notify="container">
            <i class="material-icons" data-notify="icon">notifications</i>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="material-icons">close</i>
            </button>
            <span class="text-white" data-notify="message"><?php echo e(session('status')); ?></span>
          </div>

        <?php endif; ?>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                  <thead class="table-secondary">
                  <th>#</th>
                  <th>Estado</th>
                  <th>Apellidos y nombres</th>
                  <th>Cuenta</th>
                  <th>Correo electronico</th>
                  <th>Cargo</th>
                  <th colspan="3" class="text-center bg-sucess">Acciones</th>
                </thead>
                <tbody>
                    <?php
                        $num=1;
                    ?>
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                    <td scope="row"><?php echo e($num++); ?></td>
                    <td><b class="text-<?php echo e($dato['estado']==1 ? 'success':'danger'); ?>"><?php echo e($dato['estado']==1 ? 'Activo':'Inactivo'); ?></b></td>
                    <td><?php echo e($dato['apellidos']); ?> <?php echo e($dato['nombres']); ?></td>
                    <td><b class="text-primary"><?php echo e($dato['tipo']==1 ? 'Estandar':'Administrador'); ?></b></td>
                    <td><?php echo e($dato['email']); ?></td>
                    <td><b ><?php echo e($dato->relacion_cargo['descripcion']); ?></b></td>

                        <?php if($dato['tipo']==1): ?>
                        <td>
                            <form action="<?php echo e(route('user.asignature', $dato->id)); ?>" method ="POST" >
                                <?php echo csrf_field(); ?>
                                <?php echo e(method_field('post')); ?>


                                <button type="submit" rel="tooltip" title="Materias y Grupos" class="btn btn-info btn-sm" >
                                <i class="material-icons">science</i></button>
                            </form>
                        </td>
                        <?php else: ?>
                        <td></td>
                        <?php endif; ?>
                        <td>
                        <a type="button"rel="tooltip" title="Editar Informacion" class="btn btn-primary btn-sm" href="<?php echo e(route('user.edit', $dato->id)); ?>">
                        <i class="material-icons">edit</i></a>
                        </td>

                        <td>
                            <form action="<?php echo e(route('user.destroy', $dato->id)); ?>" method ="POST" >
                                <?php echo csrf_field(); ?>
                                <?php echo e(method_field('DELETE')); ?>


                                <button type="submit" rel="tooltip" title="<?php echo e($dato['estado']==1 ? 'Desactivar':'Activar'); ?> cuenta" class="btn btn-<?php echo e($dato['estado']==1 ? 'danger':'success'); ?> btn-sm" >
                                <i class="material-icons"><?php echo e($dato['estado']==1 ? 'delete':'sync'); ?></i></button>
                            </form>
                        </td>


                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  no hay datos registrados

                <?php endif; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'user.index', 'titlePage' => __(' Usuarios')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/users/index.blade.php ENDPATH**/ ?>