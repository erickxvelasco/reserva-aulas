


<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="<?php echo e(route('user.update',$registro)); ?>" autocomplete="off" class="form-horizontal" name="form">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            

            <div class="card ">
              <div class="card-header card-header-default bg-secondary active">
                <h4 class="card-title"><?php echo e(__('Modificar Usuario')); ?></h4>
                <p class="card-category"><?php echo e(__('Datos Personales')); ?></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <label class="col-sm-2 pt-3 col-form-label text-secondary"><?php echo e(__('Apellidos ')); ?></label>
                  <div class="col-sm-9">
                    <div class="form-group<?php echo e($errors->has('apellidos') ? ' has-danger' : ''); ?>">
                      <input autocomplete="off" class="form-control<?php echo e($errors->has('apellidos') ? ' is-invalid' : ''); ?>" name="apellidos" id="id_apellido" type="text" placeholder="<?php echo e(__('Apellidos')); ?>" value="<?php echo e(old('apellidos',$registro->apellidos)); ?>" required="true" />
                      <?php if($errors->has('apellidos')): ?>
                        <span id="name-error" class="error text-danger" for="id_apellido"><?php echo e($errors->first('apellidos')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary"><?php echo e(__(' Nombres ')); ?></label>
                    <div class="col-sm-9">
                      <div class="form-group<?php echo e($errors->has('nombres') ? ' has-danger' : ''); ?>">
                        <input class="form-control<?php echo e($errors->has('nombres') ? ' is-invalid' : ''); ?>" name="nombres" id="id_nombre" type="text" placeholder="<?php echo e(__('Nombres')); ?>" value="<?php echo e(old('nombres',$registro->nombres)); ?>" required="true" aria-required="true"/>
                        <?php if($errors->has('nombres')): ?>
                          <span id="name-error" class="error text-danger" for="id_nombre"><?php echo e($errors->first('nombres')); ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary"><?php echo e(__(' Cedula de Identidad ')); ?></label>
                    <div class="col-sm-5">
                      <div class="form-group<?php echo e($errors->has('ci') ? ' has-danger' : ''); ?>">
                        <input class="form-control<?php echo e($errors->has('ci') ? ' is-invalid' : ''); ?>" name="ci" id="id_ci" type="number" placeholder="<?php echo e(__('Cedula de identidad')); ?>" value="<?php echo e(old('ci',$registro->ci)); ?>" required="true" aria-required="true"/>
                        <?php if($errors->has('ci')): ?>
                          <span id="name-error" class="error text-danger" for="id_ci"><?php echo e($errors->first('ci')); ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group<?php echo e($errors->has('expedido') ? ' has-danger' : ''); ?>">
                            <select name="expedido" class="form-control " style="position: relative;top: -5px;">
                                <?php $__currentLoopData = $expedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if( old('expedido',$registro->expedido)==$expedido->id): ?>
                                    <option value="<?php echo e($expedido['id']); ?>" selected><?php echo e($expedido['lugar']); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo e($expedido['id']); ?>"><?php echo e($expedido['lugar']); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                           <?php if($errors->has('expedido')): ?>
                            <span id="name-error" class="error text-danger" for="id_nombre"><?php echo e($errors->first('expedido')); ?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary"><?php echo e(__('Domicilio ')); ?></label>
                    <div class="col-sm-9">
                      <div class="form-group<?php echo e($errors->has('domicilio') ? ' has-danger' : ''); ?>">
                        <input class="form-control<?php echo e($errors->has('domicilio') ? ' is-invalid' : ''); ?>" name="domicilio" id="id_domicilio" type="text" placeholder="<?php echo e(__('Direccion Domicilio')); ?>" value="<?php echo e(old('domicilio',$registro->domicilio)); ?>" />
                        <?php if($errors->has('domicilio')): ?>
                          <span id="name-error" class="error text-danger" for="id_domicilio"><?php echo e($errors->first('domicilio')); ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary"><?php echo e(__('Numero de Celular ')); ?></label>
                    <div class="col-sm-9">
                      <div class="form-group<?php echo e($errors->has('celular') ? ' has-danger' : ''); ?>">
                        <input class="form-control<?php echo e($errors->has('celular') ? ' is-invalid' : ''); ?>" name="celular" id="id_celular" type="number" placeholder="<?php echo e(__('Numero de Celular')); ?>" value="<?php echo e(old('celular',$registro->celular)); ?>" />
                        <?php if($errors->has('celular')): ?>
                          <span id="name-error" class="error text-danger" for="id_celular"><?php echo e($errors->first('celular')); ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary"> <?php echo e(__('Cargo ')); ?></label>
                    <div class="col-sm-9">
                      <div class="form-group<?php echo e($errors->has('apellido') ? ' has-danger' : ''); ?>">
                        <select name="cargo" class="form-control " >
                            <?php $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(old('cargo',$registro->cargo)==$cargo->id): ?>
                                <option value="<?php echo e($cargo['id']); ?>" selected><?php echo e($cargo['descripcion']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo e($cargo['id']); ?>"><?php echo e($cargo['descripcion']); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if($errors->has('cargo')): ?>
                          <span id="name-error" class="error text-danger" for="id_apellido"><?php echo e($errors->first('cargo')); ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>








                  <br>
                </div>
                <div class="card-header card-header-default" style="background-color:rgb(221, 230, 231); height:50px;">
                    <p class="card-category text-dark"><?php echo e(__('Datos cuenta')); ?></p>
                  </div>
                  <div class="card-body ">

                      <div class="row">
                        <label class="col-sm-2 pt-3 col-form-label text-secondary"> <?php echo e(__('Rol de cuenta ')); ?></label>
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="px-3 py-2 form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="1" <?php echo e(old('tipo',$registro->tipo)==1?'checked':''); ?>> Estandar
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="p-2 form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="2" <?php echo e(old('tipo',$registro->tipo)==2?'checked':''); ?>> Administrador
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                                </label>
                              </div>

                          </div>
                        </div>
                      </div>

                      <input type="hidden" name="estado" value="1">

                    <div class="row">
                        <label class="col-sm-2 pt-3 col-form-label text-secondary"><?php echo e(__(' Correo Electronico ')); ?></label>
                        <div class="col-sm-9">
                          <div class="form-group<?php echo e($errors->has('email ') ? ' has-danger' : ''); ?>">
                            <input class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" id="id_correo" type="email" placeholder="<?php echo e(__('Correo Electronico')); ?>" value="<?php echo e(old('email',$registro->email)); ?>" required/>
                            <?php if($errors->has('email')): ?>
                              <span id="email-error" class="error text-danger" for="id_correo"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                          <label class="col-sm-2 pt-3 col-form-label text-secondary" for="id_pass"><?php echo e(__(' Contraseña ')); ?></label>
                          <div class="col-sm-9">
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                              <input class="form-control<?php echo e($errors->has('pass') ? ' is-invalid' : ''); ?>" name="password" id="id_pass" type="password" placeholder="<?php echo e(__('Contraseña')); ?>" value="<?php echo e(old('password')); ?>" />
                              <?php if($errors->has('password')): ?>
                                <span id="name-error" class="error text-danger" for="id_pass"><?php echo e($errors->first('password')); ?></span>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="alert alert-default alert-with-icon alert-sm bg-warning" >
                            <i class="material-icons text-dark" data-notify="icon">vpn_key</i>
                            <span data-notify="message">Si deja la contraseña en blanco, se tomara la anterior por defecto</span>
                          </div>

                </div>
                <div class="text-center" style="background-color:rgb(242, 239, 239);">
                    <br><input type="submit" class="btn btn-success active btn-lg" value=<?php echo e(__('Modificar')); ?> /><br><br>
                  </div>
            </div>

          </form>


        </div>
      </div>





    </div>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'user.edit', 'titlePage' => __(' Registrar Usuario')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/users/edit.blade.php ENDPATH**/ ?>