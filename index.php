<?php require_once "<vista>/vista_superior.php"; ?>
    <div class="container mt-5">
        <h2 class="text-center mb-4 fw-bold">Mas vendidos</h2>
<div id="carouselLibros" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="hover">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="img/libro7.jpg" class="d-block w-20 mx-auto" alt="Libro 7">
    </div>

    <div class="carousel-item">
      <img src="img/libro8.jpg" class="d-block w-20 mx-auto" alt="Libro 8">
    </div>

    <div class="carousel-item">
      <img src="img/libro9.jpg" class="d-block w-20 mx-auto" alt="Libro 9">
    </div>

    <div class="carousel-item">
      <img src="img/libro10.jpg" class="d-block w-20 mx-auto" alt="Libro 10">
    </div>
    <div class="carousel-item">
      <img src="img/libro4.jpg" class="d-block w-20 mx-auto" alt="Libro 4">
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselLibros" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselLibros" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<script src="/proyectos/tercera-1"></script>



<!-- CARDS -->
<h2 class="text-center mb-4">Nuestros Libros Destacados</h2>
<div class="row">
  <?php for ($i = 1; $i <= 6; $i++) : ?>
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="img/libro<?php echo $i; ?>.jpg" class="card-img-top" alt="Libro <?php echo $i; ?>">
        <div class="card-body">
          <h5 class="card-title">Libro <?php echo $i; ?></h5>
          <p class="card-text">Adentrate a tu nueva historia favorita <?php echo $i; ?>.</p>
          <a href="#" class="btn btn-primary">Comprar</a>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>

<!-- ACCORDION -->
<h2 class="text-center mt-5">Preguntas Frecuentes</h2>
<div class="accordion" id="accordionLibros">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta1">
        ¿Cómo compro un libro?
      </button>
    </h2>
    <div id="pregunta1" class="accordion-collapse collapse show" data-bs-parent="#accordionLibros">
      <div class="accordion-body">
        Puedes comprar cualquier libro haciendo clic en el botón “Comprar” debajo de la imagen.
      </div>
    </div>
  </div>
</div>



<?php require_once "<vista>/vista_inferior.php"; ?>