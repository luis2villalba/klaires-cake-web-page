/**
 * Carousel Manager - Klaire's Cake
 * Gestiona los carruseles de imágenes por categoría
 */

const imagesByCategory = {
  postres: [
    { src: 'assets/img/portfolio/postres/cheesecake.jpeg', title: 'Cheesecake Premium' },
    { src: 'assets/img/portfolio/postres/queque_fresa_1.jpeg', title: 'Queque de Fresa' },
    { src: 'assets/img/portfolio/postres/queque_fresa_2.jpeg', title: 'Queque de Fresa Deluxe' },
    { src: 'assets/img/portfolio/postres/queque_humedo_chocolate.jpeg', title: 'Queque Húmedo de Chocolate' },
    { src: 'assets/img/portfolio/postres/queque_naranja.jpeg', title: 'Queque de Naranja' },
    { src: 'assets/img/portfolio/postres/queque_naranja_2.jpeg', title: 'Queque de Naranja Premium' }
  ],
  panes: [
    { src: 'assets/img/portfolio/panes/pan_de_jamon.jpg', title: 'Pan de Jamón' },
    { src: 'assets/img/portfolio/panes/pan_queso_jamon.jpeg', title: 'Pan de Queso y Jamón' }
  ],
  comidas: [
    { src: 'assets/img/portfolio/comidas/hallaca.jpeg', title: 'Hallaca Tradicional' },
    { src: 'assets/img/portfolio/comidas/pasticho.jpeg', title: 'Pasticho de Pollo' },
    { src: 'assets/img/portfolio/comidas/reinapepiada.jpeg', title: 'Reina Pepiada' }
  ],
  pasabocas: [
    { src: 'assets/img/portfolio/pasa_bocas/tequenos.jpeg', title: 'Tequeños Clásicos' },
    { src: 'assets/img/portfolio/pasa_bocas/tequenos_2.jpeg', title: 'Tequeños Especiales' },
    { src: 'assets/img/portfolio/pasa_bocas/tequenos_3.jpeg', title: 'Tequeños Premium' },
    { src: 'assets/img/portfolio/pasa_bocas/tequenos_pastelitos.jpeg', title: 'Tequeños y Pastelitos' }
  ]
};

const categoryLabels = {
  postres: '🍰 Postres',
  panes: '🥖 Panes',
  comidas: '🍲 Comidas',
  pasabocas: '🍟 Pasabocas'
};

/**
 * Inicializar carruseles
 */
function initializeCarousels() {
  for (const [category, images] of Object.entries(imagesByCategory)) {
    initializeCarousel(category, images);
  }
}

/**
 * Inicializar un carrusel específico
 */
function initializeCarousel(category, images) {
  const carouselElement = document.querySelector(`#carousel-${category}`);
  if (!carouselElement) return;

  const inner = carouselElement.querySelector('.carousel-inner');
  inner.innerHTML = '';

  images.forEach((image, index) => {
    const item = document.createElement('div');
    item.className = `carousel-item ${index === 0 ? 'active' : ''}`;
    item.innerHTML = `
      <img src="${image.src}" class="d-block w-100" alt="${image.title}">
      <div class="carousel-caption d-none d-md-block">
        <h5>${image.title}</h5>
      </div>
    `;
    inner.appendChild(item);
  });
}

/**
 * Inicializar al cargar el DOM
 */
document.addEventListener('DOMContentLoaded', function() {
  initializeCarousels();
});

