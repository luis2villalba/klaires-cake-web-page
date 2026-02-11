<?php
$pageTitle = "Inicio - Klaire's Cake";
include __DIR__ . '/templates/header.php';
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex flex-column justify-content-end align-items-center">
  <div class="hero-content text-center text-white">
    <h1 class="hero-title display-3 fw-bold mb-3">Klaire's Cake</h1>
    <p class="hero-subtitle lead mb-4">Cautivamos tus sentidos con productos artesanales de excelente calidad</p>
    <a href="#about" class="btn btn-light btn-lg">Conoce Nuestros Productos</a>
  </div>
  <div class="hero-waves">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,50 Q300,0 600,50 T1200,50 L1200,120 L0,120 Z" fill="white"></path>
    </svg>
  </div>
</section>

<!-- ======= About Section ======= -->
<section id="about" class="about py-5 bg-light">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2>Sobre Nosotros</h2>
      <p>Quiénes Somos</p>
      <div class="title-divider"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <p class="lead text-muted">
          Somos un equipo de emprendedores con pasión por la repostería artesanal. Nos especializamos en la elaboración de productos de excelente calidad, ofreciendo una amplia gama de postres, panes y aperitivos elaborados con ingredientes frescos y técnicas tradicionales.
        </p>
        <p class="text-muted">
          Contamos con servicios de envío a domicilio a diferentes zonas de la región, garantizando que cada producto llegue en perfectas condiciones. Nuestro compromiso es brindar satisfacción y profesionalismo en cada pedido.
        </p>
        <a href="#portfolio" class="btn btn-primary btn-lg mt-4">Ver Nuestros Productos</a>
      </div>
      <div class="col-lg-6">
        <ul class="list-features">
          <li class="feature-item mb-4">
            <i class="bi bi-check-circle-fill text-success me-3 fs-5"></i>
            <div>
              <h5>Calidad Garantizada</h5>
              <p class="text-muted small">Productos elaborados con ingredientes de primera calidad</p>
            </div>
          </li>
          <li class="feature-item mb-4">
            <i class="bi bi-check-circle-fill text-success me-3 fs-5"></i>
            <div>
              <h5>Productos Frescos</h5>
              <p class="text-muted small">Elaboración diaria para garantizar la máxima frescura</p>
            </div>
          </li>
          <li class="feature-item mb-4">
            <i class="bi bi-check-circle-fill text-success me-3 fs-5"></i>
            <div>
              <h5>Entregas Puntuales</h5>
              <p class="text-muted small">Responsabilidad en los tiempos de entrega acordados</p>
            </div>
          </li>
          <li class="feature-item">
            <i class="bi bi-check-circle-fill text-success me-3 fs-5"></i>
            <div>
              <h5>Envíos a Domicilio</h5>
              <p class="text-muted small">Servicio disponible para diferentes zonas con costo adicional</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio py-5">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2>Nuestros Productos</h2>
      <p>Galería de Especialidades</p>
      <div class="title-divider"></div>
    </div>
    <div class="row g-4">
      <!-- Producto 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-item card h-100 shadow-sm border-0 overflow-hidden">
          <div class="portfolio-img-container position-relative overflow-hidden">
            <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #667eea 0%, #F26B38 100%); height: 250px; display: flex; align-items: center; justify-content: center;">
              <span class="text-white fw-bold" style="font-size: 3rem;">🍰</span>
            </div>
            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
              <button class="btn btn-light btn-sm" onclick="openGalleryModal(1)">
                <i class="bi bi-images me-2"></i>Ver
              </button>
            </div>
          </div>
          <div class="card-body">
            <span class="badge bg-primary mb-2">Repostería</span>
            <h5 class="card-title">Producto Premium 1</h5>
            <p class="card-text text-muted small">Producto artesanal elaborado con ingredientes frescos de excelente calidad.</p>
          </div>
        </div>
      </div>

      <!-- Producto 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-item card h-100 shadow-sm border-0 overflow-hidden">
          <div class="portfolio-img-container position-relative overflow-hidden">
            <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); height: 250px; display: flex; align-items: center; justify-content: center;">
              <span class="text-white fw-bold" style="font-size: 3rem;">🎂</span>
            </div>
            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
              <button class="btn btn-light btn-sm" onclick="openGalleryModal(2)">
                <i class="bi bi-images me-2"></i>Ver
              </button>
            </div>
          </div>
          <div class="card-body">
            <span class="badge bg-success mb-2">Postres</span>
            <h5 class="card-title">Producto Premium 2</h5>
            <p class="card-text text-muted small">Producto artesanal elaborado con ingredientes frescos de excelente calidad.</p>
          </div>
        </div>
      </div>

      <!-- Producto 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-item card h-100 shadow-sm border-0 overflow-hidden">
          <div class="portfolio-img-container position-relative overflow-hidden">
            <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); height: 250px; display: flex; align-items: center; justify-content: center;">
              <span class="text-white fw-bold" style="font-size: 3rem;">🥖</span>
            </div>
            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
              <button class="btn btn-light btn-sm" onclick="openGalleryModal(3)">
                <i class="bi bi-images me-2"></i>Ver
              </button>
            </div>
          </div>
          <div class="card-body">
            <span class="badge bg-warning mb-2">Panes</span>
            <h5 class="card-title">Producto Premium 3</h5>
            <p class="card-text text-muted small">Producto artesanal elaborado con ingredientes frescos de excelente calidad.</p>
          </div>
        </div>
      </div>

      <!-- Producto 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-item card h-100 shadow-sm border-0 overflow-hidden">
          <div class="portfolio-img-container position-relative overflow-hidden">
            <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); height: 250px; display: flex; align-items: center; justify-content: center;">
              <span class="text-white fw-bold" style="font-size: 3rem;">🍟</span>
            </div>
            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
              <button class="btn btn-light btn-sm" onclick="openGalleryModal(4)">
                <i class="bi bi-images me-2"></i>Ver
              </button>
            </div>
          </div>
          <div class="card-body">
            <span class="badge bg-danger mb-2">Aperitivos</span>
            <h5 class="card-title">Producto Premium 4</h5>
            <p class="card-text text-muted small">Producto artesanal elaborado con ingredientes frescos de excelente calidad.</p>
          </div>
        </div>
      </div>

      <!-- Producto 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-item card h-100 shadow-sm border-0 overflow-hidden">
          <div class="portfolio-img-container position-relative overflow-hidden">
            <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); height: 250px; display: flex; align-items: center; justify-content: center;">
              <span class="text-white fw-bold" style="font-size: 3rem;">🧁</span>
            </div>
            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
              <button class="btn btn-light btn-sm" onclick="openGalleryModal(5)">
                <i class="bi bi-images me-2"></i>Ver
              </button>
            </div>
          </div>
          <div class="card-body">
            <span class="badge bg-info mb-2">Postres</span>
            <h5 class="card-title">Producto Premium 5</h5>
            <p class="card-text text-muted small">Producto artesanal elaborado con ingredientes frescos de excelente calidad.</p>
          </div>
        </div>
      </div>

      <!-- Producto 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-item card h-100 shadow-sm border-0 overflow-hidden">
          <div class="portfolio-img-container position-relative overflow-hidden">
            <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #ff9a56 0%, #ff6a88 100%); height: 250px; display: flex; align-items: center; justify-content: center;">
              <span class="text-white fw-bold" style="font-size: 3rem;">🥐</span>
            </div>
            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
              <button class="btn btn-light btn-sm" onclick="openGalleryModal(6)">
                <i class="bi bi-images me-2"></i>Ver
              </button>
            </div>
          </div>
          <div class="card-body">
            <span class="badge bg-secondary mb-2">Panes</span>
            <h5 class="card-title">Producto Premium 6</h5>
            <p class="card-text text-muted small">Producto artesanal elaborado con ingredientes frescos de excelente calidad.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======= Gallery Modal ======= -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="false">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-dark border-0">
      <div class="modal-header border-secondary">
        <h5 class="modal-title text-white" id="galleryModalLabel">Galería de Imágenes</h5>
        <button type="button" class="btn-close btn-close-white" onclick="closeGalleryModal();" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="position-relative">
          <!-- Placeholder será creado dinámicamente por JS (evita duplicados) -->
          <img id="carouselImage" src="" alt="Imagen" data-no-placeholder="true" class="img-fluid w-100" style="max-height: 500px; object-fit: contain; display: none;">

          <!-- Controles del carrusel -->
          <button id="prevImageBtn" class="btn btn-light position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%); z-index: 10;">
            <i class="bi bi-chevron-left"></i>
          </button>
          <button id="nextImageBtn" class="btn btn-light position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); z-index: 10;">
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>

        <!-- Contador -->
        <div class="text-center text-white mt-3">
          <small id="imageCounter">0 / 0</small>
        </div>
      </div>
      <div class="modal-footer border-secondary">
        <p class="text-white small mb-0">Usa las flechas o el teclado para navegar</p>
        <button type="button" class="btn btn-secondary" onclick="closeGalleryModal();">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us py-5 bg-light">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2>¿Por Qué Elegirnos?</h2>
      <p>Razones para confiar en nosotros</p>
      <div class="title-divider"></div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="feature-box text-center p-4">
          <div class="feature-icon mb-3">
            <i class="bi bi-shield-check text-primary fs-1"></i>
          </div>
          <h4 class="mb-3">100% Original</h4>
          <p class="text-muted">Recetas originales y técnicas artesanales desarrolladas con experiencia.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="feature-box text-center p-4">
          <div class="feature-icon mb-3">
            <i class="bi bi-truck text-primary fs-1"></i>
          </div>
          <h4 class="mb-3">Entrega Rápida</h4>
          <p class="text-muted">Servicio de envío a domicilio en diferentes zonas de la región.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="feature-box text-center p-4">
          <div class="feature-icon mb-3">
            <i class="bi bi-heart-fill text-primary fs-1"></i>
          </div>
          <h4 class="mb-3">Hecho con Amor</h4>
          <p class="text-muted">Cada producto es preparado con dedicación y atención al detalle.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="feature-box text-center p-4">
          <div class="feature-icon mb-3">
            <i class="bi bi-star-fill text-primary fs-1"></i>
          </div>
          <h4 class="mb-3">Calidad Premium</h4>
          <p class="text-muted">Ingredientes de primera calidad para resultados excepcionales.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="feature-box text-center p-4">
          <div class="feature-icon mb-3">
            <i class="bi bi-chat-dots text-primary fs-1"></i>
          </div>
          <h4 class="mb-3">Atención al Cliente</h4>
          <p class="text-muted">Soporte personalizado y atención a tus necesidades específicas.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="feature-box text-center p-4">
          <div class="feature-icon mb-3">
            <i class="bi bi-patch-check text-primary fs-1"></i>
          </div>
          <h4 class="mb-3">Garantía</h4>
          <p class="text-muted">Satisfacción garantizada o tu dinero de vuelta.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======= Contact Section ======= -->
<section id="contacto" class="contact py-5">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2>Contacto</h2>
      <p>Ponte en Contacto con Nosotros</p>
      <div class="title-divider"></div>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-4">
        <form method="post" action="forms/contact.php" id="contactForm">
          <div class="mb-3">
            <label for="name" class="form-label fw-bold">Nombre Completo</label>
            <input type="text" class="form-control form-control-lg" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email</label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label fw-bold">Teléfono (Opcional)</label>
            <input type="tel" class="form-control form-control-lg" id="phone" name="phone">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label fw-bold">Mensaje</label>
            <textarea class="form-control form-control-lg" id="message" name="message" rows="5" placeholder="Cuéntanos cómo podemos ayudarte..." required></textarea>
          </div>
          <input type="hidden" name="honeypot" value="">
          <button type="submit" class="btn btn-primary btn-lg w-100">Enviar Mensaje</button>
        </form>
      </div>
      <div class="col-lg-6">
        <div class="contact-info">
          <div class="contact-item mb-5">
            <h5 class="mb-3">
              <i class="bi bi-geo-alt-fill text-primary me-2"></i>Ubicación
            </h5>
            <p class="text-muted">Alajuela Centro, Urbanización La Baviera</p>
          </div>
          <div class="contact-item mb-5">
            <h5 class="mb-3">
              <i class="bi bi-telephone-fill text-primary me-2"></i>Teléfono
            </h5>
            <p class="text-muted">
              <a href="https://api.whatsapp.com/send?phone=50672156759&text=Hola%20Klaire%27s%20Cake,%20quiero%20información" target="_blank" class="text-decoration-none">
                +506 7215 6759 (WhatsApp)
              </a>
            </p>
          </div>
          <div class="contact-item mb-5">
            <h5 class="mb-3">
              <i class="bi bi-clock-fill text-primary me-2"></i>Horarios
            </h5>
            <p class="text-muted">
              Lunes a Viernes: 8:00 AM - 6:00 PM<br>
              Sábado: 8:00 AM - 4:00 PM<br>
              Domingo: Cerrado
            </p>
          </div>
          <div class="social-links pt-3">
            <a href="https://www.facebook.com/saborconsazon2-2356303821079923" target="_blank" class="me-3">
              <i class="bi bi-facebook text-primary fs-5"></i>
            </a>
            <a href="https://www.instagram.com/saborconsazon2/" target="_blank" class="me-3">
              <i class="bi bi-instagram text-primary fs-5"></i>
            </a>
            <a href="https://api.whatsapp.com/send?phone=50672156759" target="_blank">
              <i class="bi bi-whatsapp text-primary fs-5"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/templates/footer.php'; ?>
