<?php $__env->startSection('title','Modelos'); ?>

<?php $__env->startSection('content'); ?>
<h1>Nuestros modelos 2022</h1>


<?php for($i = 0; $i < 10; $i++): ?>
    El valor actual es: <?php echo e($i); ?><br>
<?php endfor; ?>

<hr>

<ul>
<?php $__currentLoopData = $autos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li> Modelo: <b><?php echo e($auto); ?></b></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<hr>

<ol>
<?php $__empty_1 = true; $__currentLoopData = $autos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clave => $auto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li><b> <?php echo e($clave); ?> </b></li>
     <ul>
         <li><?php echo e($auto); ?></li>
     </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>No Existen autos disponibles</p>
<?php endif; ?>
</ol>


<hr>
<?php if(count($autos) === 1): ?>
    Existe un registro
<?php elseif(count($autos) > 1): ?>
   Existen múltiples registros!
<?php else: ?>
    No existen registros!
<?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mopos\OneDrive\Escritorio\01_Concesionaria-main\resources\views/modelos.blade.php ENDPATH**/ ?>