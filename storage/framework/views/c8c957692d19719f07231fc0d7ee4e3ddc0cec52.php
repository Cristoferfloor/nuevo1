<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <style>
    footer {

      color: rgb(241, 245, 248);
      position: fixed;
      bottom: 0px;
      width: 100%;
      height: 5%;
    }
  </style>
  <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
  
  
  <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <main class="container">
    <div class="bg-light p-5 rounded">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </main>
  <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\Users\mopos\OneDrive\Escritorio\01_Concesionaria-main\resources\views/layout/main.blade.php ENDPATH**/ ?>