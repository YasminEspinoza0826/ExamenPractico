<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Examen PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>GradoController/">Grados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>AlumnoController/">Alumno</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>MateriaController/">Materias</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>IntermediaController">Materias y Grados</a>
      </li>
      
    </ul>
  </div>
</nav>