<?php require_once "<vista>/vista_superior.php"; ?>
    <div class="container mt-5">
        <h2 class="text-center mb-4 fw-bold">Libros Destacados</h2>
  <!-- Carrusel -->
  <div id="carouselLibros" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">

      <!-- 🔹 Primer grupo de libros -->
      <div class="carousel-item active">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card-carousel h-100 shadow-sm">
              <img src="img/libro1.jpg" class="card-carousel-img" alt="Libro 1">
              <div class="card-body text-center">
                <h5 class="card-title">Cuentos de Hadas Modernos</h5>
                <p class="card-text text-muted">Holly Black</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card-carousel h-100 shadow-sm">
              <img src="img/libro2.jpg" class="card-carousel-img" alt="Libro 2">
              <div class="card-body text-center">
                <h5 class="card-title">Guardianes de la Ciudadela</h5>
                <p class="card-text text-muted">Laura Gallego</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card-carousel h-100 shadow-sm">
              <img src="img/libro3.jpg" class="card-carousel-img" alt="Libro 3">
              <div class="card-body text-center">
                <h5 class="card-title">Alicia en el Pais de las Maravillas</h5>
                <p class="card-text text-muted">Patrick Rothfuss</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 🔹 Segundo grupo de libros -->
      <div class="carousel-item">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card-carousel h-100 shadow-sm">
              <img src="img/libro4.jpg" class="card-carousel-img" alt="Libro 4">
              <div class="card-body text-center">
                <h5 class="card-title">La balada de Nunca Jamas</h5>
                <p class="card-text text-muted">Stephanie Garber</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card-carousel h-100 shadow-sm">
              <img src="img/libro5.jpg" class="card-carousel-img" alt="Libro 5">
              <div class="card-body text-center">
                <h5 class="card-title">Cancion de la lluvia eterna</h5>
                <p class="card-text text-muted">E.J Mellow</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card-carouselh-100 shadow-sm">
              <img src="img/libro6.jpg" class="card-carousel-img" alt="Libro 6">
              <div class="card-body text-center">
                <h5 class="card-title">La Serpiente y las Alas de la Noche</h5>
                <p class="card-text text-muted">Carissa Broadbent</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- 🔸 Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselLibros" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselLibros" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
    </button>
  </div>
</div>


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