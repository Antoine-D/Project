<?php $__env->startSection('title'); ?> Bienvenue sur Le Monde <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenue sur Le Monde</h1>
    <div class="links">
        <a href="#">Articles</a>
        <a href="#">Catégories</a>
        <a href="#">Les 24h</a>
        <a href="#">La rédaction</a>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>