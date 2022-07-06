<!DOCTYPE html>
<html>
    <head>
        <?php $__env->startSection('head'); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='<?php echo e(url("css/grafica.css")); ?>'>
        <?php echo $__env->yieldSection(); ?>
    </head>
    <body>
        <nav>
            <div id="containerNav" >
                <p class="itemsNav">Ciao</p>
                <p class="itemsNav">Ciao</p>
                <p class="itemsNav">Ciao</p>
                <p class="itemsNav">Ciao</p>
                <p class="itemsNav">Ciao</p>
            </div>
        </nav>
        <article>

            <section>
                <?php echo $__env->yieldContent('content'); ?>
            </section>
        </article>
        <footer>
            <div id="flex-containerfooter">
                <div class="footeritems">Gianvito Grasso 1000026771</div>
            </div>
    </footer>
    </body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/layouts/base.blade.php ENDPATH**/ ?>