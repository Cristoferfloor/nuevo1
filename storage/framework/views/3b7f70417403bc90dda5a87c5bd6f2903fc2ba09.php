<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="<?php echo e(route('home')); ?>">CristoferFloot</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo e(menuNavegation('home')); ?>" href="<?php echo e(route('home')); ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(menuNavegation('about')); ?>" href="<?php echo e(route('about')); ?>">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(menuNavegation('personal')); ?>" href="<?php echo e(route('personal')); ?>">Personal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(menuNavegation('models')); ?>" href="<?php echo e(route('models')); ?>">Modelos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(menuNavegation('contact')); ?>" href="<?php echo e(route('contact')); ?>">Contáctanos</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="busqueda" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Busqueda</button>
      </form>
    </div>
  </div>
</nav><?php /**PATH C:\Users\mopos\OneDrive\Escritorio\01_Concesionaria-main\resources\views/layout/nav.blade.php ENDPATH**/ ?>