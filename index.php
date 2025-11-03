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
  
    <img src="img/libro7.jpg" class="img-libro" alt="Libro 7 duplicado">
    <img src="img/libro8.jpg" class="img-libro" alt="Libro 8 duplicado">
    <img src="img/libro9.jpg" class="img-libro" alt="Libro 9 duplicado">
  </div>
</div>

<!-- estilo -->
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

  /* responsive */
  @media (max-width: 992px) {
    .img-libro { width: 160px; }
  }

  @media (max-width: 768px) {
    .img-libro { width: 70%; }
  }
</style>

<!-- Script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    const container = document.getElementById('carouselBooks');

    const animation = track.animate(
      [{ transform: 'translateX(0)' }, { transform: 'translateX(-50%)' }],
      { duration: 15000, iterations: Infinity, easing: 'linear' }
    );

    //  pausa cuando paso el mause
    container.addEventListener('mouseenter', () => animation.pause());

    // vuelve a seguir
    container.addEventListener('mouseleave', () => animation.play());
  });
</script>
<script src="/proyectos/tercera-1"></script>

<!-- las cards -->
<h2 class="text-center mb-4">Nuestros Libros Destacados</h2>
<div class="row">
  <?php for ($i = 1; $i <= 6; $i++) : ?>
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <!-- imagenes de los libros -->
        <img src="img/libro<?php echo $i; ?>.jpg" class="card-img-top" alt="Libro <?php echo $i; ?>">

        <div class="card-body">
          <!-- titulo -->
          <h5 class="card-title">Nuevo Lanzamiento</h5>

          <!-- dentro de la card -->
          <p class="card-text">Adéntrate en tu nueva historia favorita y descubre aventuras únicas.</p>

          <!-- botón -->
          <a href="#" class="btn btn-primary">Comprar</a>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>

<!--  preguntas del acordion  -->
<h2 class="text-center mt-4 fw-bold">Preguntas Frecuentes</h2>

<div class="accordion mt-3 mb-5" id="accordionPreguntas" style="max-width: 700px; margin: 0 auto;">

  <!-- primera -->
  <div class="accordion-item border-0 mb-2 shadow-sm rounded-3" style="background-color: #e8f5e9;">
    <h2 class="accordion-header" id="pregunta1">
      <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta1" aria-expanded="true" aria-controls="respuesta1" style="background-color: #c8e6c9; font-weight: 600;">
        ¿Cómo compro un libro?
      </button>
    </h2>
    <div id="respuesta1" class="accordion-collapse collapse show" aria-labelledby="pregunta1" data-bs-parent="#accordionPreguntas">
      <div class="accordion-body">
        Solo debes hacer clic en el botón <strong>“Comprar”</strong> del libro que desees, completar tus datos y confirmar tu pedido.
      </div>
    </div>
  </div>

  <!-- segunda -->
  <div class="accordion-item border-0 mb-2 shadow-sm rounded-3" style="background-color: #e8f5e9;">
    <h2 class="accordion-header" id="pregunta2">
      <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta2" aria-expanded="false" aria-controls="respuesta2" style="background-color: #c8e6c9; font-weight: 600;">
        ¿Cuáles son los métodos de pago disponibles?
      </button>
    </h2>
    <div id="respuesta2" class="accordion-collapse collapse" aria-labelledby="pregunta2" data-bs-parent="#accordionPreguntas">
      <div class="accordion-body">
        Aceptamos pagos con tarjetas de crédito, débito y transferencias bancarias. 
      </div>
    </div>
  </div>

  <!-- tercera -->
  <div class="accordion-item border-0 mb-2 shadow-sm rounded-3" style="background-color: #e8f5e9;">
    <h2 class="accordion-header" id="pregunta3">
      <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta3" aria-expanded="false" aria-controls="respuesta3" style="background-color: #c8e6c9; font-weight: 600;">
        ¿Realizan envíos a todo el país?
      </button>
    </h2>
    <div id="respuesta3" class="accordion-collapse collapse" aria-labelledby="pregunta3" data-bs-parent="#accordionPreguntas">
      <div class="accordion-body">
        Sí, realizamos envíos a todo el país con servicio de mensajería rápida. El costo depende de la zona de entrega.
      </div>
    </div>
  </div>

  <!-- cuarta -->
  <div class="accordion-item border-0 mb-2 shadow-sm rounded-3" style="background-color: #e8f5e9;">
    <h2 class="accordion-header" id="pregunta4">
      <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta4" aria-expanded="false" aria-controls="respuesta4" style="background-color: #c8e6c9; font-weight: 600;">
        ¿Puedo devolver un libro?
      </button>
    </h2>
    <div id="respuesta4" class="accordion-collapse collapse" aria-labelledby="pregunta4" data-bs-parent="#accordionPreguntas">
      <div class="accordion-body">
        Sí, puedes devolverlo dentro de los 7 días posteriores a la compra siempre que esté en perfecto estado.
      </div>
    </div>
  </div>

  <!-- quinta -->
  <div class="accordion-item border-0 shadow-sm rounded-3" style="background-color: #e8f5e9;">
    <h2 class="accordion-header" id="pregunta5">
      <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta5" aria-expanded="false" aria-controls="respuesta5" style="background-color: #c8e6c9; font-weight: 600;">
        ¿Cómo puedo contactar con la librería?
      </button>
    </h2>
    <div id="respuesta5" class="accordion-collapse collapse" aria-labelledby="pregunta5" data-bs-parent="#accordionPreguntas">
      <div class="accordion-body">
        Puedes escribirnos a nuestro correo <strong>contacto@libreriaonline.com</strong> 
      </div>
    </div>
  </div>
</div>





<?php require_once "<vista>/vista_inferior.php"; ?>