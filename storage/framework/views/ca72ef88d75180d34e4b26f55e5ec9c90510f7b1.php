

<?php $__env->startSection('content'); ?>
<div id="flex-containersection">
    <p>LOGIN</p>
    <main>
        <form name="login" method='post'>
        <?php echo csrf_field(); ?>
                <?php if($error == 'empty_fields'): ?>
                <div><span id="nomeSpan">Compilare tutti i campi</span></div>
                <?php endif; ?>
                <?php if($error == 'wrong'): ?>
                <div><span id="nomeSpan">User o Password Errati</span></div>
                <?php endif; ?>
                <label>Username <input type="text" name="username" placeholder="username" value="<?php echo e(old("username")); ?>"></input></label>
                <label>Password <input type="Password" name="password" placeholder="password"></label>
                <label>&nbsp;<input type="submit" value="Login"></label>
        </form>
    </main>
    <p>Non hai un account?&nbsp;<a href="<?php echo e(route('register')); ?>">Iscriviti</a></p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/login.blade.php ENDPATH**/ ?>