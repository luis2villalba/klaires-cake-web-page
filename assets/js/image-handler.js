/**
 * Image Handler - Klaire's Cake
 * Handles missing images and provides fallbacks
 */

(function() {
  'use strict';

  // Handle image load errors with graceful fallbacks
  document.addEventListener('error', function(event) {
    if (event.target.tagName === 'IMG') {
      const img = event.target;

      // If the script set a suppression flag, ignore (used when clearing src programmatically)
      if (img._suppressPlaceholder) return;

      // If src is empty (we intentionally cleared it), don't create a placeholder
      if (!img.src || img.src === '') return;

      // If developer marked the image to skip placeholder, do nothing
      if (img.dataset && img.dataset.noPlaceholder === 'true') return;

      // Check if it's already a placeholder
      if (img.src.includes('placeholder') || (img.alt && img.alt.toLowerCase().includes('imagen no disponible'))) {
        return;
      }

      // Create a placeholder SVG
      const svg = createPlaceholder(img.alt || 'Imagen no disponible');
      img.style.display = 'none';
      if (img.parentNode) img.parentNode.insertBefore(svg, img);
    }
  }, true);

  // Function to create a placeholder SVG
  function createPlaceholder(text) {
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('width', '400');
    svg.setAttribute('height', '300');
    svg.setAttribute('viewBox', '0 0 400 300');
    svg.setAttribute('class', 'img-placeholder');
    svg.style.backgroundColor = '#f0f0f0';
    svg.style.display = 'block';
    svg.style.width = '100%';
    svg.style.height = '100%';
    svg.style.objectFit = 'cover';

    // Background rect
    const rect = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
    rect.setAttribute('width', '400');
    rect.setAttribute('height', '300');
    rect.setAttribute('fill', '#e9ecef');
    svg.appendChild(rect);

    // Icon
    const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
    circle.setAttribute('cx', '200');
    circle.setAttribute('cy', '120');
    circle.setAttribute('r', '40');
    circle.setAttribute('fill', '#d1d5db');
    svg.appendChild(circle);

    // Text
    const tspan = document.createElementNS('http://www.w3.org/2000/svg', 'text');
    tspan.setAttribute('x', '200');
    tspan.setAttribute('y', '250');
    tspan.setAttribute('text-anchor', 'middle');
    tspan.setAttribute('fill', '#6b6f76');
    tspan.setAttribute('font-family', 'Arial, sans-serif');
    tspan.setAttribute('font-size', '14');
    tspan.textContent = text;
    svg.appendChild(tspan);

    return svg;
  }

  // Lazy load images
  if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          if (img.dataset.src && !img.src) {
            // mark image as no-placeholder while loading to avoid the global handler
            img.dataset.noPlaceholder = 'true';
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
            // remove the flag after load or error
            img.addEventListener('load', () => { delete img.dataset.noPlaceholder; }, { once: true });
            img.addEventListener('error', () => { delete img.dataset.noPlaceholder; }, { once: true });
          }
          observer.unobserve(img);
        }
      });
    });

    document.querySelectorAll('img[data-src]').forEach(img => {
      imageObserver.observe(img);
    });
  }
})();
