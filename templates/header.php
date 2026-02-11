<?php
$brand = $brand ?? "Klaire's Cake";
$pageTitle = $pageTitle ?? $brand;
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="Klaire's Cake - Pastelería y repostería artesanal. Productos frescos, de alta calidad, elaborados con amor.">
  <meta name="keywords" content="pastelería, cakes, queques, postres, repostería artesanal, Klaire's Cake, Alajuela">
  <link rel="icon" href="assets/img/favicon.ico">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Vendor and Template CSS -->
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">

  <!-- Image Handler Script -->
  <script src="assets/js/image-handler.js"></script>

  <!-- SEO / Social -->
  <meta property="og:title" content="<?= htmlspecialchars($brand) ?>">
  <meta property="og:description" content="Pastelería y repostería artesanal con productos frescos de excelente calidad.">
  <meta property="og:locale" content="es_ES">
  <meta name="twitter:card" content="summary_large_image">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar" style="background: rgba(42, 45, 62, 0.95); backdrop-filter: blur(10px); transition: all 0.3s ease;">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="/" style="font-size: 1.4rem; letter-spacing: -0.5px;">
      <img src="assets/img/logo1.jpeg" alt="<?= htmlspecialchars($brand) ?> logo" style="height:44px; width: 44px; object-fit: cover; border-radius:6px; margin-right:12px; box-shadow: 0 2px 8px rgba(0,0,0,0.2);">
      <span><?= htmlspecialchars($brand) ?></span>
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link fw-500" href="#hero">Inicio</a></li>
        <li class="nav-item"><a class="nav-link fw-500" href="#about">Quiénes Somos</a></li>
        <li class="nav-item"><a class="nav-link fw-500" href="#portfolio">Productos</a></li>
        <li class="nav-item"><a class="nav-link fw-500" href="#why-us">¿Por Qué Nosotros?</a></li>
        <li class="nav-item"><a class="nav-link fw-500" href="#contacto">Contacto</a></li>
      </ul>
      <div class="d-flex ms-lg-3 gap-2 mt-3 mt-lg-0">
        <a class="btn btn-outline-light btn-sm" href="https://www.facebook.com/saborconsazon2-2356303821079923" target="_blank" title="Facebook">
          <i class="bi bi-facebook"></i>
        </a>
        <a class="btn btn-outline-light btn-sm" href="https://www.instagram.com/saborconsazon2/" target="_blank" title="Instagram">
          <i class="bi bi-instagram"></i>
        </a>
        <a class="btn btn-outline-light btn-sm" href="https://api.whatsapp.com/send?phone=50672156759&text=Hola%20Klaire%27s%20Cake,%20quiero%20información" target="_blank" title="WhatsApp">
          <i class="bi bi-whatsapp"></i>
        </a>
      </div>
    </div>
  </div>
</nav>

<main style="margin-top: 0;">

