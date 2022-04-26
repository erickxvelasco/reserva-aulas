<?php $__env->startSection('content'); ?>
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-rose text-center">
            <h4 class="card-title"><strong><?php echo e(__('Iniciar Sesión')); ?></strong></h4>
          </div>
          <div class="card-body">
            <p class="card-description text-center"><?php echo e(__('Recuerde que la cuenta fue generada por el ')); ?> <strong>Administrador</strong></p>
            <div class="bmd-form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons text-rose">email</i>
                  </span>
                </div>
                <?php if(session()->has('abc')): ?>
                    <?php echo e(session()->get('abc')); ?>// si existe imprime el valor de la variable mensaje
                <?php endif; ?>
                <input type="email" name="email" class="form-control" placeholder="<?php echo e(__('Email...')); ?>" value="<?php echo e(old('email', 'erick@sitic.com')); ?>" required>
              </div>
              <?php if($errors->has('email')): ?>
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong><?php echo e($errors->first('email')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="bmd-form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?> mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons text-rose">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo e(__('Password...')); ?>" value="<?php echo e(!$errors->has('password') ? "secret" : ""); ?>" required>
              </div>
              <?php if($errors->has('password')): ?>
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong><?php echo e($errors->first('password')); ?></strong>
                </div>
              <?php endif; ?>
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Recuerdame')); ?>

                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-rose btn-link btn-lg" name="acceder"><?php echo e(__('Ingresar')); ?></button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('Reserva de Aulas')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Desktop\reserva-aulas\resources\views/auth/login.blade.php ENDPATH**/ ?>