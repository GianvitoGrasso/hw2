<!DOCTYPE html>
<html>
    <head>
        <script>
            const BASE_URL = "<?php echo e(url('/')); ?>/";
            const csrf_token = "<?php echo e(csrf_token()); ?>";
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='<?php echo e(url("css/home.css")); ?>'>
        <script src='<?php echo e(url("js/home.js")); ?>' defer="true"></script>
    </head>
    <body>
        <nav>
            <div id="containerNav" >
                <a class="itemsNav" href="<?php echo e(url('login')); ?>">Home</a>
                <a class="itemsNav" href="<?php echo e(url('profilo')); ?>">Benvenuto <?php echo e($username); ?></a>
                <form name="form" id="form">
                <label><p>Scrivi il nome di uno sportivo :</p> <input type="text" name="contenuto" id="contenuto"> 
                    <input type="submit" value="Cerca"></label>
                </form>
                <p class="itemsNav"><a href="<?php echo e(url('logout')); ?>">Logout</a></p>
            </div>
        </nav>
        <article>
            <section>
                <div class ="flex-containersection">
                    <p>I tuoi Preferiti:</p>
                </div>
                <div class ="flex-button">
                    <button>Cancella tutti i preferiti</button>
                </div>
            </section>
        </article>
        <footer>
            <div id="flex-containerfooter">
                <div class="footeritems">Gianvito Grasso 1000026771</div>
            </div>
    </footer>
    </body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/home.blade.php ENDPATH**/ ?>