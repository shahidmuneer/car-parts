<!DOCTYPE html>
<html lang="en">
<head>

<?php echo $__env->make('partialsMainTable.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="body-wrapper">


<?php echo $__env->make('partialsMainTable.topBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('partialsMainTable.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>



<?php /**PATH C:\php projects\classified ads\Laravel-Classimax-Directory-2019\resources\views/layouts/mainTable.blade.php ENDPATH**/ ?>