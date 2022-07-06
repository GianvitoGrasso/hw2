<!DOCTYPE html>
<html>
    <head>
        <script>
            const BASE_URL = "<?php echo e(url('/')); ?>/";
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='<?php echo e(url("css/home.css")); ?>'>
        <script src='<?php echo e(url("js/profilo.js")); ?>' defer="true"></script>
    </head>
    <body>
        <nav>
            <div id="containerNav" >
                <a class="itemsNav" href="<?php echo e(url('login')); ?>">Home</a>
                <a class="itemsNav" href="<?php echo e(url('profilo')); ?>">Benvenuto <?php echo e($username); ?></a>
                <p class="itemsNav"><a href="<?php echo e(url('logout')); ?>">Logout</a></p>
            </div>
        </nav>
        <article>
            <section>
                <div class ="flex">
                    <p>Il tuo Profilo:</p>
                    <div class="first">
                        <p>Nome: <?php echo e($nome); ?></p>
                        <p>Cognome: <?php echo e($cognome); ?></p>
                        <p>Username: <?php echo e($username); ?></p>
                        <p>Email: <?php echo e($email); ?></p>
                        <p>DataCreazione: <?php echo e($created_at); ?></p>
                        <p>UltimaModifica: <?php echo e($updated_at); ?></p>
                        <p>NumeroPreferiti: <?php echo e($NumeroPreferiti); ?></p>
                    </div>
                </div>
                <div class ="flex-button">
                    <button>Cancella il profilo</button>
                </div>
            </section>
        </article>
        <footer>
            <div id="flex-containerfooter">
                <div class="footeritems">Gianvito Grasso 1000026771</div>
            </div>
    </footer>
    </body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/profilo.blade.php ENDPATH**/ ?>