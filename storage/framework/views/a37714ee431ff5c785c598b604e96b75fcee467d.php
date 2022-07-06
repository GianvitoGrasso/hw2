

<?php $__env->startSection('head'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
<script src='<?php echo e(url("js/check_registrazione.js")); ?>' defer="true"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="flex-containersection">
    <p>REGISTRATI</p>
    <main>
        <form name="formReg" method="post" >
        <?php echo csrf_field(); ?>
            <?php if($error == 'empty_fields'): ?>
            <span id="nomeSpan">Compilare tutti i campi</span>
            <?php endif; ?>
            <label>Nome<input type="text" name="nome" id="nome" value="<?php echo e(old("nome")); ?>" placeholder="nome"></input></label>
            <span class="hidden" id="nomeSpan">Nome utente non disponibile</span>
            <label>Cognome <input type="text" name="cognome" id="cognome" value="<?php echo e(old("cognome")); ?>" placeholder="cognome"></label>
            <span class="hidden" id="cognomeSpan">Cognome utente non disponibile</span>
            <label>Username <input type="text" name="username" id="username" value="<?php echo e(old("username")); ?>" placeholder="nome utente"></label>         
            <span class="hidden" id="usernameSpan">Username utente non disponibile</span>               
            <?php if($error == 'usernamenonvalido'): ?>
            <span id="usernameSpan">Username utente non disponibile</span>
            <?php endif; ?>
            <label>Email <input type="text" name="email" id="email" value="<?php echo e(old("email")); ?>" placeholder="email"></input></label>
            <span class="hidden" id="emailSpan">Indirizzo email non valido</span>
            <?php if($error == 'emailnonvalida'): ?>
            <span id="emailSpan">Indirizzo email non disponibile</span>
            <?php endif; ?>
            <label>Password <input type="Password" name="password" id="password" placeholder="password"></label>
            <span class="hidden" id="passSpan">Inserisci almeno 8 caratteri</span>
            <?php if($error == 'passwordcorta'): ?>
            <span id="passSpan">Inserisci almeno 8 caratteri</span>
            <?php endif; ?>
            <label>Conferma Password <input type="Password" name="conferma_password" id="confpass" placeholder="conferma password"></label>
            <span class="hidden" id="confpassSpan">Le password non coincidono</span>
            <?php if($error == 'passworderrata'): ?>
            <span id="confpassSpan">Le password non coincidono</span>
            <?php endif; ?>
            <label>&nbsp;<input type="submit" value="Registrati"></label>
        </form>
    </main>
    <p>Hai gia un account?&nbsp;<a href="<?php echo e(route('login')); ?>">Accedi</a></p>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/register.blade.php ENDPATH**/ ?>