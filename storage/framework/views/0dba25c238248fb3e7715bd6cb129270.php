

<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard()->check()): ?>
        <!-- Authenticated content -->
        <p>Welcome, <?php echo e(Auth::user()->name); ?>!</p>
        <!-- Protected content here -->
    <?php endif; ?>

    <?php if(auth()->guard()->guest()): ?>
        <p>You are not logged in. Please <a href="<?php echo e(route('login')); ?>">login</a>.</p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <main class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger">
                                            <?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    <?php if($errors->has('password')): ?>
                                        <span class="text-danger">
                                            <?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNI\SEM 5\PBKK\tugas-individu-almirari-main\resources\views/auth/login.blade.php ENDPATH**/ ?>