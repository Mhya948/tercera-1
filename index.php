<?php require_once "<vista>/vista_superior.php"; ?>
    <div class="container mt-5">
<h2 class="text-center mb-4 fw-bold">Más vendidos</h2>

<div class="carousel-container overflow-hidden position-relative" id="carouselBooks">
  <div class="carousel-track d-flex align-items-center">
    <img src="img/libro7.jpg" class="img-libro" alt="Libro 7">
    <img src="img/libro8.jpg" class="img-libro" alt="Libro 8">
    <img src="img/libro9.jpg" class="img-libro" alt="Libro 9">
    <img src="img/libro10.jpg" class="img-libro" alt="Libro 10">
    <img src="img/libro4.jpg" class="img-libro" alt="Libro 4">
    <img src="img/libro5.jpg" class="img-libro" alt="Libro 5">
    <!-- 🔁 se duplican solo para efecto continuo -->
    <img src="img/libro7.jpg" class="img-libro" alt="Libro 7 duplicado">
    <img src="img/libro8.jpg" class="img-libro" alt="Libro 8 duplicado">
    <img src="img/libro9.jpg" class="img-libro" alt="Libro 9 duplicado">
  </div>
</div>

<!-- 🔹 Estilos -->
<style>
  .carousel-container {
    max-width: 900px;
    margin: 0 auto;
  }

  .carousel-track {
    display: flex;
    animation: scrollBooks 15s linear infinite;
  }

  @keyframes scrollBooks {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }

  .img-libro {
    width: 200px;
    margin: 0 10px;
    border-radius: 12px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .img-libro:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  }

  /* 🔸 Responsivo */
  @media (max-width: 992px) {
    .img-libro { width: 160px; }
  }

  @media (max-width: 768px) {
    .img-libro { width: 70%; }
  }
</style>

<!-- 🔹 Script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    const container = document.getElementById('carouselBooks');

    const animation = track.animate(
      [{ transform: 'translateX(0)' }, { transform: 'translateX(-50%)' }],
      { duration: 15000, iterations: Infinity, easing: 'linear' }
    );

    // ⏸️ Pausar al pasar el mouse
    container.addEventListener('mouseenter', () => animation.pause());

    // ▶️ Reanudar al salir
    container.addEventListener('mouseleave', () => animation.play());
  });
</script>
<script src="/proyectos/tercera-1"></script>

<!-- CARDS -->
<h2 class="text-center mb-4">Nuestros Libros Destacados</h2>
<div class="row">
  <?php for ($i = 1; $i <= 6; $i++) : ?>
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <!-- Imagen de cada libro -->
        <img src="img/libro<?php echo $i; ?>.jpg" class="card-img-top" alt="Libro <?php echo $i; ?>">

        <div class="card-body">
          <!-- Título fijo, sin número -->
          <h5 class="card-title">Nuevo Lanzamiento</h5>

          <!-- Texto fijo, sin número -->
          <p class="card-text">Adéntrate en tu nueva historia favorita y descubre aventuras únicas.</p>

          <!-- Botón -->
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