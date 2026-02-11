# 📸 Galería de Carruseles - Documentación

## 🎬 Visión General

Se ha agregado una nueva sección **"Galería de Especialidades"** con **4 carruseles Bootstrap** organizados por categoría de productos:

1. 🍰 **Postres Premium** - 6 imágenes
2. 🥖 **Panes Especiales** - 2 imágenes
3. 🍲 **Comidas Tradicionales** - 3 imágenes
4. 🍟 **Pasabocas y Aperitivos** - 4 imágenes

---

## 📁 Estructura de Carpetas

Las imágenes están organizadas en:

```
assets/img/portfolio/
├── postres/
│   ├── cheesecake.jpeg
│   ├── queque_fresa_1.jpeg
│   ├── queque_fresa_2.jpeg
│   ├── queque_humedo_chocolate.jpeg
│   ├── queque_naranja.jpeg
│   └── queque_naranja_2.jpeg
│
├── panes/
│   ├── pan_de_jamon.jpg
│   └── pan_queso_jamon.jpeg
│
├── comidas/
│   ├── hallaca.jpeg
│   ├── pasticho.jpeg
│   └── reinapepiada.jpeg
│
└── pasa_bocas/
    ├── tequenos.jpeg
    ├── tequenos_2.jpeg
    ├── tequenos_3.jpeg
    └── tequenos_pastelitos.jpeg
```

---

## 🔧 Archivos Creados/Modificados

### Nuevos Archivos:
- ✅ **assets/js/carousel-manager.js** - Gestor de carruseles

### Archivos Modificados:
- ✅ **index.php** - Nueva sección "Gallery"
- ✅ **assets/css/custom.css** - Estilos para carruseles
- ✅ **templates/footer.php** - Inclusión del script

---

## 🎨 Características del Carrusel

### Visual
- 🎬 Transiciones suaves con animación de zoom
- 📏 Altura: 400px en desktop, 250px en móvil
- 🏷️ Etiquetas con nombre del producto
- 🎯 Indicadores (dots) personalizados en naranja

### Interactivo
- ⬅️ Botones anterior/siguiente con hover
- 🖱️ Los botones aparecen al pasar mouse
- ⏱️ Auto-avance cada 5 segundos (Bootstrap)
- 📱 Totalmente responsive

### Controles
- **Botones de Navegación**: Circulares, naranjas, con animación
- **Indicadores**: Puntos personalizados que se hacen barras al activo
- **Captions**: Texto superpuesto con degradado oscuro

---

## 📋 Cómo Funciona

### 1. HTML (index.php)
```html
<div id="carousel-postres" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner"></div>
  <!-- Controles y indicadores -->
</div>
```

### 2. JavaScript (carousel-manager.js)
```javascript
// Define las imágenes por categoría
const imagesByCategory = {
  postres: [...],
  panes: [...],
  comidas: [...],
  pasabocas: [...]
};

// Llena los carruseles automáticamente
function initializeCarousels() {
  // Itera cada categoría
  // Crea items dinamicamente
  // Configura Bootstrap Carousel
}
```

### 3. CSS (custom.css)
```css
/* Estilos personalizados para carruseles */
.carousel { ... }
.carousel-item { ... }
.carousel-control-prev/next { ... }
.carousel-indicators { ... }
```

---

## 🖼️ Datos de Imágenes

### Postres (6 imágenes)
```javascript
[
  { src: '...postres/cheesecake.jpeg', title: 'Cheesecake Premium' },
  { src: '...postres/queque_fresa_1.jpeg', title: 'Queque de Fresa' },
  { src: '...postres/queque_fresa_2.jpeg', title: 'Queque de Fresa Deluxe' },
  { src: '...postres/queque_humedo_chocolate.jpeg', title: 'Queque Húmedo de Chocolate' },
  { src: '...postres/queque_naranja.jpeg', title: 'Queque de Naranja' },
  { src: '...postres/queque_naranja_2.jpeg', title: 'Queque de Naranja Premium' }
]
```

### Panes (2 imágenes)
```javascript
[
  { src: '...panes/pan_de_jamon.jpg', title: 'Pan de Jamón' },
  { src: '...panes/pan_queso_jamon.jpeg', title: 'Pan de Queso y Jamón' }
]
```

### Comidas (3 imágenes)
```javascript
[
  { src: '...comidas/hallaca.jpeg', title: 'Hallaca Tradicional' },
  { src: '...comidas/pasticho.jpeg', title: 'Pasticho de Pollo' },
  { src: '...comidas/reinapepiada.jpeg', title: 'Reina Pepiada' }
]
```

### Pasabocas (4 imágenes)
```javascript
[
  { src: '...pasa_bocas/tequenos.jpeg', title: 'Tequeños Clásicos' },
  { src: '...pasa_bocas/tequenos_2.jpeg', title: 'Tequeños Especiales' },
  { src: '...pasa_bocas/tequenos_3.jpeg', title: 'Tequeños Premium' },
  { src: '...pasa_bocas/tequenos_pastelitos.jpeg', title: 'Tequeños y Pastelitos' }
]
```

---

## 🎯 Cómo Personalizar

### Agregar una Nueva Imagen

1. **En carousel-manager.js**, dentro de la categoría correspondiente:

```javascript
const imagesByCategory = {
  postres: [
    // ... imágenes existentes
    { src: 'assets/img/portfolio/postres/nueva_imagen.jpeg', title: 'Nombre del Producto' }
  ],
  // ...
};
```

2. **Guarda el archivo**
3. **Recarga la página** (Ctrl+F5 para limpiar caché)

### Cambiar el Título de una Imagen

```javascript
// Antes:
{ src: '...cheesecake.jpeg', title: 'Cheesecake Premium' }

// Después:
{ src: '...cheesecake.jpeg', title: 'Cheesecake de Frutos Rojos' }
```

### Reordenar Imágenes

Simplemente reordena las líneas dentro del array:

```javascript
postres: [
  // Primera imagen mostrada
  { src: '...queque_fresa_1.jpeg', title: 'Queque de Fresa' },
  // Segunda imagen
  { src: '...cheesecake.jpeg', title: 'Cheesecake Premium' },
  // ... etc
]
```

### Agregar una Nueva Categoría

1. **En carousel-manager.js**:

```javascript
const imagesByCategory = {
  // ... categorías existentes
  nuevacategoria: [
    { src: '...nueva_img1.jpg', title: 'Producto 1' },
    { src: '...nueva_img2.jpg', title: 'Producto 2' }
  ]
};

const categoryLabels = {
  // ... etiquetas existentes
  nuevacategoria: '📦 Nueva Categoría'
};
```

2. **En index.php**, en la sección Gallery, agregar:

```html
<div class="carousel-container">
  <h3 class="carousel-section-title">
    <span class="emoji">📦</span>
    Nueva Categoría
  </h3>
  <div id="carousel-nuevacategoria" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner"></div>
    <!-- Botones y controles -->
  </div>
</div>
```

---

## 🎨 Personalizar Estilos

### Cambiar Color de Botones
En `assets/css/custom.css`:
```css
.carousel-control-prev,
.carousel-control-next {
  background: rgba(242, 107, 56, 0.8); /* Cambiar este color */
}
```

### Cambiar Altura del Carrusel
```css
.carousel-item {
  min-height: 400px; /* Cambiar esta altura */
}

.carousel-item img {
  height: 400px; /* Cambiar esta altura */
}
```

### Cambiar Velocidad de Animación
```css
.carousel-item img {
  transition: transform 0.5s ease; /* Cambiar 0.5s */
}
```

---

## 📱 Responsive Design

El carrusel se adapta automáticamente:

### Desktop (>768px)
- Altura: 400px
- Botones: 50px
- Visible en hover

### Tablet/Mobile (<768px)
- Altura: 250px
- Botones: 40px
- Siempre visible (opacity: 0.6)

---

## ⚙️ Configuración Bootstrap

El carrusel usa los datos de `data-bs-ride="carousel"` para:
- ✅ Auto-avance cada 5 segundos
- ✅ Pausa en hover
- ✅ Navegación por teclado
- ✅ Touch support en móvil

---

## 🐛 Solución de Problemas

### Las imágenes no aparecen
- ✅ Verifica que las rutas en carousel-manager.js sean correctas
- ✅ Asegúrate de que los archivos existen en `assets/img/portfolio/`
- ✅ Limpia el caché del navegador (Ctrl+Shift+Delete)

### Los carruseles no avanzan
- ✅ Comprueba que Bootstrap JS está cargado
- ✅ Verifica que carousel-manager.js está incluido
- ✅ Abre la consola (F12) para ver errores

### Las imágenes se ven pixeladas
- ✅ Las imágenes deben ser de alta calidad
- ✅ Mínimo recomendado: 1200x800px
- ✅ Formato: JPG o JPEG para fotos

---

## 📊 Estadísticas

| Métrica | Valor |
|---------|-------|
| Total de imágenes | 15 |
| Carruseles | 4 |
| Postres | 6 imágenes |
| Panes | 2 imágenes |
| Comidas | 3 imágenes |
| Pasabocas | 4 imágenes |

---

## 🚀 Próximas Mejoras (Opcional)

- [ ] Agregar filtros por categoría
- [ ] Zoom al hacer clic
- [ ] Descargar imagen
- [ ] Compartir en redes
- [ ] Galería de 360 grados
- [ ] Videos de preparación

---

## 💡 Tips

1. **Actualiza títulos**: Hazlos descriptivos y atractivos
2. **Usa buenas fotos**: La calidad de imagen afecta la conversión
3. **Organiza por temporada**: Muestra productos de estación
4. **Nuevos carruseles**: Agrega categorías según sea necesario
5. **SEO**: Los títulos ayudan al posicionamiento

---

## 📞 Resumen Rápido

- **Ubicación**: Nueva sección "Gallery" entre Portfolio y Why Us
- **Archivos**: carousel-manager.js + estilos CSS
- **Fácil de editar**: Todo en carousel-manager.js
- **Responsive**: Funciona en todos los dispositivos
- **Bootstrap**: Usa componentes nativos de Bootstrap 5

---

**Versión**: 1.0 (Galería de Carruseles)
**Fecha**: Febrero 11, 2026
**Estado**: ✅ Completado

¡Tu galería está lista para impresionar! 🎬✨

