/**
 * Portfolio Gallery Manager - Klaire's Cake
 * Carga estática de imágenes (mapeo) en lugar de escaneo dinámico
 */

let allImages = [];
let currentImageIndex = 0;
let imagesLoaded = false;
let lastFocusedElement = null; // to restore focus after closing modal
let ignoreImageErrors = false; // when true, onerror won't show messages

// Mapeo estático de imágenes por producto (puedes ajustar arrays por producto)
const STATIC_IMAGES = [
  'assets/img/portfolio/IMG-20220515-WA0010.jpg',
  'assets/img/portfolio/IMG-20220515-WA0012.jpg',
  'assets/img/portfolio/IMG-20220515-WA0017.jpg',
  'assets/img/portfolio/IMG-20220515-WA0018.jpg',
  'assets/img/portfolio/IMG-20220515-WA0021.jpg',
  'assets/img/portfolio/IMG-20220515-WA0022.jpg',
  'assets/img/portfolio/IMG-20220515-WA0024.jpg',
  'assets/img/portfolio/IMG-20220515-WA0025.jpg'
];

// Opcional: asignación por productoIndex (1..6). Si no existe, se usa STATIC_IMAGES
const PRODUCT_IMAGES = {
  1: STATIC_IMAGES, // Producto 1 -> imágenes IMG-20220515
  2: STATIC_IMAGES,
  3: STATIC_IMAGES,
  4: STATIC_IMAGES,
  5: STATIC_IMAGES,
  6: STATIC_IMAGES
};

function showErrorMessage(msg) {
  // Mensaje simple para el usuario; se puede reemplazar por un toast
  try {
    alert(msg);
  } catch (e) {
    console.error(msg);
  }
}

/**
 * Preparar imágenes de forma estática
 */
function prepareStaticImages() {
  allImages = Array.isArray(STATIC_IMAGES) ? STATIC_IMAGES.slice() : [];
  imagesLoaded = allImages.length > 0;
  console.log(`Imágenes estáticas cargadas: ${allImages.length}`);
  return imagesLoaded;
}

// Llamada temprana para preparar imágenes incluso si el DOM ya está cargado
prepareStaticImages();

/**
 * Abrir modal con carrusel (usa mapeo estático por producto)
 */
function openGalleryModal(productIndex) {
  const modal = document.getElementById('galleryModal');
  if (!modal) return;

  // Guardar el elemento que tenía el foco para restaurarlo al cerrar
  try { lastFocusedElement = document.activeElement; } catch (e) { lastFocusedElement = null; }

  // Seleccionar imágenes según productoIndex si existe mapeo
  if (PRODUCT_IMAGES.hasOwnProperty(productIndex)) {
    allImages = PRODUCT_IMAGES[productIndex].slice();
    imagesLoaded = allImages.length > 0;
  } else {
    // Fallback a estáticas generales
    prepareStaticImages();
  }

  if (!imagesLoaded) {
    showErrorMessage('No se encontraron imágenes configuradas para esta galería.');
    return;
  }

  currentImageIndex = 0;

  // Crear placeholder dinámico dentro del modal (remueve cualquier placeholder anterior)
  const existingPlaceholder = modal.querySelector('.img-placeholder');
  if (existingPlaceholder) existingPlaceholder.remove();

  const placeholder = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
  placeholder.setAttribute('width', '400');
  placeholder.setAttribute('height', '300');
  placeholder.setAttribute('viewBox', '0 0 400 300');
  placeholder.setAttribute('class', 'img-placeholder');
  // Ensure placeholder absolutely overlays the image area (inline styles to avoid specificity issues)
  placeholder.style.backgroundColor = '#f0f0f0';
  placeholder.style.display = 'block';
  placeholder.style.width = '100%';
  placeholder.style.height = '100%';
  placeholder.style.objectFit = 'cover';
  placeholder.style.position = 'absolute';
  placeholder.style.top = '0';
  placeholder.style.left = '0';
  placeholder.style.zIndex = '0';

  const rect = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
  rect.setAttribute('width', '400');
  rect.setAttribute('height', '300');
  rect.setAttribute('fill', '#e9ecef');
  placeholder.appendChild(rect);

  const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
  circle.setAttribute('cx', '200');
  circle.setAttribute('cy', '120');
  circle.setAttribute('r', '40');
  circle.setAttribute('fill', '#d1d5db');
  placeholder.appendChild(circle);

  const tspan = document.createElementNS('http://www.w3.org/2000/svg', 'text');
  tspan.setAttribute('x', '200');
  tspan.setAttribute('y', '250');
  tspan.setAttribute('text-anchor', 'middle');
  tspan.setAttribute('fill', '#6b6f76');
  tspan.setAttribute('font-family', 'Arial, sans-serif');
  tspan.setAttribute('font-size', '14');
  tspan.textContent = 'Imagen';
  placeholder.appendChild(tspan);

  const container = modal.querySelector('.position-relative');
  if (container) container.insertBefore(placeholder, container.firstChild);

  // Ensure the image is absolutely positioned and above the placeholder
  const imgEl = document.getElementById('carouselImage');
  if (imgEl) {
    imgEl.style.position = 'absolute';
    imgEl.style.top = '0';
    imgEl.style.left = '0';
    imgEl.style.width = '100%';
    imgEl.style.height = '100%';
    imgEl.style.objectFit = 'contain';
    imgEl.style.zIndex = '1';
    imgEl.style.display = 'none';
  }

  updateCarousel();

  // Mostrar modal manualmente
  console.log('Abriendo modal...');
  modal.setAttribute('aria-hidden', 'false');
  modal.classList.add('show');
  modal.style.display = 'block';
  document.body.classList.add('modal-open');

  // Crear backdrop si no existe
  let backdrop = document.querySelector('.modal-backdrop');
  if (!backdrop) {
    backdrop = document.createElement('div');
    backdrop.className = 'modal-backdrop fade show';
    document.body.appendChild(backdrop);
  }

  // Mover el foco al botón de cerrar dentro del modal para accesibilidad
  try {
    const closeBtn = modal.querySelector('.btn-close');
    if (closeBtn && typeof closeBtn.focus === 'function') closeBtn.focus();
  } catch (e) { /* ignore */ }
}

/**
 * Actualizar carrusel con imagen actual - VERSIÓN MEJORADA
 */
function updateCarousel() {
  if (allImages.length === 0) return;

  const modal = document.getElementById('galleryModal');
  const img = document.getElementById('carouselImage');
  const counter = document.getElementById('imageCounter');
  // scope placeholder inside modal to avoid other placeholders on page
  const placeholder = modal ? modal.querySelector('.img-placeholder') : document.querySelector('.img-placeholder');

  if (!img || !counter) {
    console.error('No se encontraron elementos del carrusel:', { img, counter });
    return;
  }

  try {
    const url = allImages[currentImageIndex];
    console.log('Cargando imagen', currentImageIndex + 1, 'de', allImages.length, ':', url);

    // Mostrar placeholder y ocultar imagen hasta que cargue
    if (placeholder) placeholder.style.display = 'block';
    img.style.display = 'none';

    // Evitar que el handler global cree otro placeholder durante la carga
    img.dataset.noPlaceholder = 'true';

    // Actualizar contador inmediatamente
    counter.textContent = `${currentImageIndex + 1} / ${allImages.length}`;

    // Remove previous handlers if any
    if (img._galleryLoadHandler) {
      try { img.removeEventListener('load', img._galleryLoadHandler); } catch (e) { /* ignore */ }
      delete img._galleryLoadHandler;
    }
    if (img._galleryErrorHandler) {
      try { img.removeEventListener('error', img._galleryErrorHandler); } catch (e) { /* ignore */ }
      delete img._galleryErrorHandler;
    }

    // Handlers as functions so we can remove them reliably
    const onLoad = function () {
      delete img.dataset.noPlaceholder;
      img.style.display = 'block';
      if (placeholder) placeholder.style.display = 'none';
      console.log('Imagen cargada correctamente:', img.src);
      // cleanup
      try { img.removeEventListener('load', onLoad); } catch (e) { /* ignore */ }
      try { img.removeEventListener('error', onError); } catch (e) { /* ignore */ }
      delete img._galleryLoadHandler;
      delete img._galleryErrorHandler;
    };

    const onError = function () {
      console.error('Error cargando imagen:', url);
      // Si estamos en proceso de cierre/limpieza, ignorar error
      if (ignoreImageErrors || img._ignoreGalleryErrors || img._suppressPlaceholder) {
        delete img.dataset.noPlaceholder;
        img.style.display = 'none';
        if (placeholder) placeholder.style.display = 'none';
        try { img.removeEventListener('load', onLoad); } catch (e) { /* ignore */ }
        try { img.removeEventListener('error', onError); } catch (e) { /* ignore */ }
        delete img._galleryLoadHandler;
        delete img._galleryErrorHandler;
        return;
      }

      delete img.dataset.noPlaceholder;
      showErrorMessage('No se pudo cargar la imagen.');
      img.style.display = 'none';
      if (placeholder) placeholder.style.display = 'block';
      try { img.removeEventListener('load', onLoad); } catch (e) { /* ignore */ }
      try { img.removeEventListener('error', onError); } catch (e) { /* ignore */ }
      delete img._galleryLoadHandler;
      delete img._galleryErrorHandler;
    };

    img._galleryLoadHandler = onLoad;
    img._galleryErrorHandler = onError;
    img.addEventListener('load', onLoad);
    img.addEventListener('error', onError);

    // Asignar la URL (esto dispara la carga)
    img.src = url;
    img.alt = `Imagen ${currentImageIndex + 1}`;

    // Log para depuración
    console.log('Imagen asignada (fetch iniciada):', img.src);

  } catch (e) {
    console.error('Error al actualizar carrusel:', e);
  }
}

/**
 * Ir a siguiente imagen
 */
function nextImage() {
  if (allImages.length === 0) return;
  currentImageIndex = (currentImageIndex + 1) % allImages.length;
  updateCarousel();
}

/**
 * Ir a imagen anterior
 */
function previousImage() {
  if (allImages.length === 0) return;
  currentImageIndex = (currentImageIndex - 1 + allImages.length) % allImages.length;
  updateCarousel();
}

/**
 * Cerrar modal
 */
function closeGalleryModal() {
  const modal = document.getElementById('galleryModal');
  if (!modal) return;

  console.log('Cerrando modal...');

  // Evitar que el onerror muestre mensajes mientras limpiamos
  ignoreImageErrors = true;

  // Mover foco fuera del modal antes de ocultarlo para evitar advertencia aria-hidden
  try {
    // Restaurar foco al elemento que tenía foco antes de abrir modal (si existe)
    if (lastFocusedElement && typeof lastFocusedElement.focus === 'function') {
      lastFocusedElement.focus();
    } else if (document.body && typeof document.body.focus === 'function') {
      document.body.focus();
    }
  } catch (e) { /* ignore */ }

  // If focus is still inside modal (some browsers delay focus changes), force blur of the focused element
  try {
    if (modal.contains(document.activeElement)) {
      try { document.activeElement.blur(); } catch (e) { /* ignore */ }
    }
  } catch (e) { /* ignore */ }

  // Small delay to ensure focus change is committed before hiding (helps some browsers)
  // but keep it synchronous enough to not feel laggy.
  // We'll proceed immediately after focus attempt.

  modal.setAttribute('aria-hidden', 'true');
  modal.classList.remove('show');
  modal.style.display = 'none';
  document.body.classList.remove('modal-open');

  // Remover backdrop
  const backdrop = document.querySelector('.modal-backdrop');
  if (backdrop) {
    backdrop.remove();
  }

  // Reset image and placeholder state
  const img = document.getElementById('carouselImage');
  const placeholder = modal.querySelector('.img-placeholder');
  if (img) {
    // Mark element to suppress global placeholder handling
    try { img._suppressPlaceholder = true; } catch (e) { /* ignore */ }
    // Mark to ignore gallery-level errors during cleanup
    try { img._ignoreGalleryErrors = true; } catch (e) { /* ignore */ }

    // Set data attribute to prevent global handler from injecting placeholder
    try { img.dataset.noPlaceholder = 'true'; } catch (e) { /* ignore */ }

    // Remove our own listeners if present
    try {
      if (img._galleryLoadHandler) img.removeEventListener('load', img._galleryLoadHandler);
      if (img._galleryErrorHandler) img.removeEventListener('error', img._galleryErrorHandler);
    } catch (e) { /* ignore */ }

    img.style.display = 'none';
    // Limpiar src (dataset noPlaceholder evita placeholder global)
    try { img.src = ''; } catch (e) { /* ignore */ }
    delete img.dataset.noPlaceholder;
    delete img._galleryLoadHandler;
    delete img._galleryErrorHandler;

    // Remove suppression flags after a small tick to ensure no error handlers run
    try { setTimeout(() => { delete img._suppressPlaceholder; delete img._ignoreGalleryErrors; }, 50); } catch (e) { /* ignore */ }
  }
  if (placeholder) placeholder.style.display = 'none';

  // Restaurar foco al elemento que lo tenía antes de abrir el modal
  try {
    if (lastFocusedElement && typeof lastFocusedElement.focus === 'function') {
      lastFocusedElement.focus();
    } else if (document.body && typeof document.body.focus === 'function') {
      document.body.focus();
    }
  } catch (e) { /* ignore */ }

  // Rehabilitar notificaciones de error
  ignoreImageErrors = false;
}

// Navegación por teclado (mejor comprobación del modal visible)
document.addEventListener('keydown', function(event) {
  const modal = document.getElementById('galleryModal');
  if (!modal) return;

  // Considerar modal visible si tiene la clase 'show' (no depender exclusivamente de Bootstrap instance)
  const isVisible = modal.classList.contains('show') || modal.getAttribute('aria-hidden') === 'false';
  if (!isVisible) return;

  if (event.key === 'ArrowRight') nextImage();
  if (event.key === 'ArrowLeft') previousImage();
  if (event.key === 'Escape') closeGalleryModal();
});

/**
 * Inicializar - asegurar binding incluso si el script se carga después del DOM
 */
function initGalleryBindings() {
  // Prepara imágenes estáticas en background (idempotente)
  prepareStaticImages();

  // Eventos del carrusel
  const nextBtn = document.getElementById('nextImageBtn');
  const prevBtn = document.getElementById('prevImageBtn');

  if (nextBtn) nextBtn.addEventListener('click', nextImage);
  if (prevBtn) prevBtn.addEventListener('click', previousImage);
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initGalleryBindings);
} else {
  // DOM ya cargado
  initGalleryBindings();
}

