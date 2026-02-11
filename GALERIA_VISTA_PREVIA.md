# 🎬 Vista Previa - Galería de Carruseles

## 📍 Ubicación en la Página

```
┌─────────────────────────────────────────────────────────────────┐
│  NAVBAR FIJO                                                    │
└─────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────┐
│  HERO SECTION                                                   │
└─────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────┐
│  ABOUT (Quiénes Somos)                                          │
└─────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────┐
│  PORTFOLIO (Productos Grid - 6 items)                           │
└─────────────────────────────────────────────────────────────────┘

╔═════════════════════════════════════════════════════════════════╗
║  🆕 GALLERY - GALERÍA DE ESPECIALIDADES (NEW!)                  ║
║═════════════════════════════════════════════════════════════════║
║                                                                 ║
║  Explora Nuestros Productos                                    ║
║  ═══════════════════════════════════════════════════════════   ║
║                                                                 ║
║  🍰 POSTRES PREMIUM                                             ║
║  ┌──────────────────────────────────────────────────────────┐ ║
║  │                                                          │ ║
║  │          [IMAGE CAROUSEL WITH CONTROLS]                 │ ║
║  │                                                          │ ║
║  │         Cheesecake Premium (Auto-advancing)             │ ║
║  │                                                          │ ║
║  │  ◀         ⭐ ⭐ ⭐ ⭐ ⭐ ⭐         ▶               │ ║
║  │                                                          │ ║
║  └──────────────────────────────────────────────────────────┘ ║
║                                                                 ║
║  🥖 PANES ESPECIALES                                            ║
║  ┌──────────────────────────────────────────────────────────┐ ║
║  │        [PAN CAROUSEL]                                    │ ║
║  │        Pan de Jamón                                     │ ║
║  │  ◀        ⭐ ⭐        ▶                           │ ║
║  └──────────────────────────────────────────────────────────┘ ║
║                                                                 ║
║  🍲 COMIDAS TRADICIONALES                                       ║
║  ┌──────────────────────────────────────────────────────────┐ ║
║  │        [COMIDA CAROUSEL]                                 │ ║
║  │        Hallaca Tradicional                              │ ║
║  │  ◀         ⭐ ⭐ ⭐         ▶                      │ ║
║  └──────────────────────────────────────────────────────────┘ ║
║                                                                 ║
║  🍟 PASABOCAS Y APERITIVOS                                      ║
║  ┌──────────────────────────────────────────────────────────┐ ║
║  │        [PASABOCAS CAROUSEL]                              │ ║
║  │        Tequeños Clásicos                                │ ║
║  │  ◀        ⭐ ⭐ ⭐ ⭐        ▶                     │ ║
║  └──────────────────────────────────────────────────────────┘ ║
║                                                                 ║
╚═════════════════════════════════════════════════════════════════╝

┌─────────────────────────────────────────────────────────────────┐
│  WHY US (¿Por Qué Nosotros?)                                    │
└─────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────┐
│  CONTACT (Contacto)                                             │
└─────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────┐
│  FOOTER                                                         │
└─────────────────────────────────────────────────────────────────┘
```

---

## 🎬 Estructura de Cada Carrusel

```
┌────────────────────────────────────────────────────────┐
│                    CARRUSEL INDIVIDUAL                 │
├────────────────────────────────────────────────────────┤
│                                                        │
│  🍰 POSTRES PREMIUM (Título con emoji)               │
│                                                        │
│  ┌──────────────────────────────────────────────────┐ │
│  │                                                  │ │
│  │        ┌─────────────────────────────────┐     │ │
│  │        │                                 │     │ │
│  │        │     [IMAGEN DEL PRODUCTO]       │     │ │
│  │        │                                 │     │ │
│  │        │     (400px de alto)             │     │ │
│  │        │                                 │     │ │
│  │        │   🍰 Cheesecake Premium         │     │ │
│  │        │                                 │     │ │
│  │        └─────────────────────────────────┘     │ │
│  │                                                  │ │
│  │   ◀️ (Botón Anterior)  ⭐ ⭐ ⭐  ▶️ (Siguiente) │ │
│  │    (Naranja, circular)                          │ │
│  │                                                  │ │
│  └──────────────────────────────────────────────────┘ │
│                                                        │
└────────────────────────────────────────────────────────┘
```

---

## 🎨 Comportamiento Interactivo

### Vista Normal (Sin Mouse)
```
┌──────────────────────────────────┐
│                                  │
│      [IMAGEN del Producto]       │
│                                  │
│      Cheesecake Premium          │
│                                  │
│    (Botones invisibles/opacos)   │
│                                  │
└──────────────────────────────────┘
```

### Al Pasar Mouse
```
┌──────────────────────────────────┐
│                                  │
│      [IMAGEN del Producto]       │
│                                  │
│      Cheesecake Premium          │
│                                  │
│  ◀️(VISIBLE) ⭐⭐⭐ ▶️(VISIBLE)  │
│                                  │
└──────────────────────────────────┘
```

### Click en Siguiente
```
Animación de transición:
  Imagen actual: Scale 1 → Scale 0.95 (fade out)
  Nueva imagen: Scale 0.95 → Scale 1 (fade in)
  Duración: 0.5 segundos
```

---

## 📊 Características Visuales

### Colores
```
Fondo: Negro (#000000)
Botones: Naranja (#F26B38)
Indicadores Activos: Naranja (#F26B38)
Indicadores Inactivos: Blanco semi-transparente
Texto: Blanco
```

### Dimensiones
```
Desktop:
  - Altura de imagen: 400px
  - Ancho: 100% del contenedor
  - Botones: 50px de diámetro

Tablet/Mobile (<768px):
  - Altura de imagen: 250px
  - Botones: 40px de diámetro
```

### Indicadores
```
Estado Normal:
  ⭐ ⭐ ⭐ ⭐ ⭐ ⭐
  (Puntos pequeños)

Imagen Activa:
  ⭐ ⭐ ▔▔▔▔▔ ⭐ ⭐
  (La línea se expande horizontalmente)
```

---

## 🎯 Flujo de Usuario

```
1. Usuario entra en la página
   ↓
2. Scroll hacia la sección "Gallery"
   ↓
3. Ve el primer carrusel (Postres)
   ↓
4. El carrusel auto-avanza cada 5 segundos
   ↓
5. Usuario puede:
   - Hacer clic en botones ◀️ ▶️
   - Hacer clic en los puntos (indicadores)
   - Desplazarse para ver siguiente carrusel
   ↓
6. Explora Panes, Comidas y Pasabocas
   ↓
7. Continúa viendo resto de página
```

---

## 📱 Responsiveness

### Desktop (>1200px)
```
Ancho máximo: 1200px
Altura: 400px
Botones: Visible en hover
```

### Tablet (768px-1199px)
```
Ancho máximo: 100%
Altura: 400px
Botones: Visible en hover
```

### Mobile (<768px)
```
Ancho: 100%
Altura: 250px
Botones: Siempre visibles (opacity 60%)
Stack: Uno debajo del otro
```

---

## ⚡ Animaciones

### Transición de Imagen
```
Duración: 0.5 segundos
Tipo: Zoom + Fade
De: Scale 0.95, Opacity 0
A: Scale 1, Opacity 1
```

### Hover en Botón
```
Duración: 0.3 segundos
De: Background rgba(242,107,56, 0.8)
A: Background rgba(242,107,56, 1)
```

### Hover en Carrusel
```
Los botones: Fade in (opacity 0 → 1)
Duración: 0.3 segundos
```

---

## 📸 Ejemplos de Imágenes por Categoría

### 🍰 Postres (6)
```
1. Cheesecake Premium          (cheesecake.jpeg)
2. Queque de Fresa            (queque_fresa_1.jpeg)
3. Queque de Fresa Deluxe     (queque_fresa_2.jpeg)
4. Queque Húmedo Chocolate    (queque_humedo_chocolate.jpeg)
5. Queque de Naranja          (queque_naranja.jpeg)
6. Queque de Naranja Premium  (queque_naranja_2.jpeg)
```

### 🥖 Panes (2)
```
1. Pan de Jamón              (pan_de_jamon.jpg)
2. Pan de Queso y Jamón      (pan_queso_jamon.jpeg)
```

### 🍲 Comidas (3)
```
1. Hallaca Tradicional        (hallaca.jpeg)
2. Pasticho de Pollo          (pasticho.jpeg)
3. Reina Pepiada             (reinapepiada.jpeg)
```

### 🍟 Pasabocas (4)
```
1. Tequeños Clásicos          (tequenos.jpeg)
2. Tequeños Especiales        (tequenos_2.jpeg)
3. Tequeños Premium           (tequenos_3.jpeg)
4. Tequeños y Pastelitos      (tequenos_pastelitos.jpeg)
```

---

## 🎯 Puntos Fuertes

✅ **Profesional**: Diseño limpio y moderno
✅ **Responsivo**: Se adapta a todos los dispositivos
✅ **Interactivo**: Auto-avance + controles manuales
✅ **Rápido**: Animaciones suaves sin lag
✅ **Accesible**: Controles claros y visible
✅ **Organizado**: Categorías bien definidas
✅ **Fácil de mantener**: Estructura simple

---

## 💡 Impacto Visual

Antes: Grid de 6 productos estático
Después: 4 carruseles dinámicos, atractivos e interactivos

Resultado: **Experiencia mucho más inmersiva y profesional** 🎬✨

---

**Versión**: 1.0
**Fecha**: Febrero 11, 2026
**Estado**: ✅ Completado

