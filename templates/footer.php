<?php
$brand = $brand ?? "Klaire's Cake";
?>
</main>

<footer class="bg-dark text-light py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <h5 class="fw-bold mb-3"><?= htmlspecialchars($brand) ?></h5>
        <p class="text-muted">Pastelería y repostería artesanal. Productos frescos elaborados con amor y dedicación.</p>
        <div class="social-links">
          <a href="https://www.facebook.com/saborconsazon2-2356303821079923" target="_blank" class="text-light me-3 d-inline-block" title="Facebook">
            <i class="bi bi-facebook fs-5"></i>
          </a>
          <a href="https://www.instagram.com/saborconsazon2/" target="_blank" class="text-light me-3 d-inline-block" title="Instagram">
            <i class="bi bi-instagram fs-5"></i>
          </a>
          <a href="https://api.whatsapp.com/send?phone=50672156759" target="_blank" class="text-light d-inline-block" title="WhatsApp">
            <i class="bi bi-whatsapp fs-5"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <h5 class="fw-bold mb-3">Enlaces Rápidos</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#hero" class="text-muted text-decoration-none">Inicio</a></li>
          <li class="mb-2"><a href="#about" class="text-muted text-decoration-none">Quiénes Somos</a></li>
          <li class="mb-2"><a href="#portfolio" class="text-muted text-decoration-none">Productos</a></li>
          <li class="mb-2"><a href="#why-us" class="text-muted text-decoration-none">¿Por Qué Nosotros?</a></li>
          <li class="mb-2"><a href="#contacto" class="text-muted text-decoration-none">Contacto</a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6">
        <h5 class="fw-bold mb-3">Contacto</h5>
        <ul class="list-unstyled text-muted">
          <li class="mb-3">
            <i class="bi bi-geo-alt-fill text-warning me-2"></i>
            Alajuela Centro, Urb. La Baviera
          </li>
          <li class="mb-3">
            <i class="bi bi-telephone-fill text-warning me-2"></i>
            <a href="https://api.whatsapp.com/send?phone=50672156759" class="text-muted text-decoration-none">+506 7215 6759</a>
          </li>
          <li>
            <i class="bi bi-clock-fill text-warning me-2"></i>
            Lun-Vie 8AM-6PM / Sab 8AM-4PM
          </li>
        </ul>
      </div>
    </div>

    <hr class="bg-secondary">

    <div class="text-center text-muted py-3">
      <p class="mb-0">&copy; <?= date('Y') ?> <strong><?= htmlspecialchars($brand) ?></strong>. Todos los derechos reservados.</p>
      <small>Diseño profesional | Elaborado con <i class="bi bi-heart-fill text-danger"></i></small>
    </div>
  </div>
</footer>

<!-- Vendor JS: Bootstrap 5 Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- Optional vendor scripts -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/js/main.js"></script>

<!-- Portfolio Gallery Script -->
<script src="assets/js/portfolio-gallery.js"></script>

<!-- Carousel Manager Script - COMENTADO para evitar conflictos -->
<!-- <script src="assets/js/carousel-manager.js"></script> -->

<script>
  // Navbar background on scroll
  window.addEventListener('scroll', function() {
    const navbar = document.getElementById('mainNavbar');
    if (window.scrollY > 100) {
      navbar.style.background = 'rgba(42, 45, 62, 0.98)';
      navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
    } else {
      navbar.style.background = 'rgba(42, 45, 62, 0.95)';
      navbar.style.boxShadow = 'none';
    }
  });
</script>

</body>
</html>
