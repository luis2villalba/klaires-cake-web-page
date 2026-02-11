# 🎬 Cómo Ver los Carruseles - Guía Rápida

## 🚀 Pasos Rápidos

### 1️⃣ Inicia el Servidor Local

```powershell
Set-Location 'C:\Proyectos\saborconsazon2'
php -S 127.0.0.1:8000
```

O simplemente ejecuta: **start-server.bat**

### 2️⃣ Abre en tu Navegador

```
http://127.0.0.1:8000/
```

### 3️⃣ Scroll Hacia la Sección "Gallery"

Verás esta estructura:

```
Hero Section
   ↓
About Section
   ↓
Portfolio Grid (6 productos)
   ↓
🆕 GALLERY SECTION ← AQUÍ ESTÁN LOS CARRUSELES
   ↓
Why Us Section
   ↓
Contact Section
```

---

## 👀 Qué Verás

### Sección de Galería
```
═══════════════════════════════════════════════
   GALERÍA DE ESPECIALIDADES
   Explora Nuestros Productos
═══════════════════════════════════════════════

🍰 POSTRES PREMIUM
┌─────────────────────────────────┐
│ [IMAGEN CARRUSEL]               │
│ Cheesecake Premium              │
│ ◀️  ⭐⭐⭐⭐⭐⭐  ▶️             │
└─────────────────────────────────┘

🥖 PANES ESPECIALES
┌─────────────────────────────────┐
│ [IMAGEN CARRUSEL]               │
│ Pan de Jamón                    │
│ ◀️   ⭐⭐        ▶️             │
└─────────────────────────────────┘

🍲 COMIDAS TRADICIONALES
┌─────────────────────────────────┐
│ [IMAGEN CARRUSEL]               │
│ Hallaca Tradicional             │
│ ◀️   ⭐⭐⭐    ▶️             │
└─────────────────────────────────┘

🍟 PASABOCAS Y APERITIVOS
┌─────────────────────────────────┐
│ [IMAGEN CARRUSEL]               │
│ Tequeños Clásicos               │
│ ◀️  ⭐⭐⭐⭐   ▶️             │
└─────────────────────────────────┘
```

---

## 🎬 Interactúa Con los Carruseles

### Autoavance
- El carrusel avanza automáticamente cada 5 segundos
- Las imágenes tienen transición suave

### Botones de Navegación
- **◀️ Anterior**: Vuelve a la imagen anterior
- **▶️ Siguiente**: Va a la siguiente imagen
- Los botones aparecen al pasar mouse

### Indicadores (Puntos)
- **Pequeños puntos**: Imagen no activa
- **Línea naranja**: Imagen activa
- **Click en cualquier punto**: Salta a esa imagen

### Teclado
- **Flecha izquierda**: Imagen anterior
- **Flecha derecha**: Imagen siguiente

---

## 📱 En Móvil

En dispositivos pequeños:
- Altura: 250px (en lugar de 400px)
- Botones: Siempre visibles
- Funciona con touch (deslizar)
- Responsivo perfecto

---

## 🎯 Lo Que Verás en Cada Carrusel

### 🍰 Postres Premium (6 imágenes)
1. Cheesecake Premium
2. Queque de Fresa
3. Queque de Fresa Deluxe
4. Queque Húmedo de Chocolate
5. Queque de Naranja
6. Queque de Naranja Premium

### 🥖 Panes Especiales (2 imágenes)
1. Pan de Jamón
2. Pan de Queso y Jamón

### 🍲 Comidas Tradicionales (3 imágenes)
1. Hallaca Tradicional
2. Pasticho de Pollo
3. Reina Pepiada

### 🍟 Pasabocas (4 imágenes)
1. Tequeños Clásicos
2. Tequeños Especiales
3. Tequeños Premium
4. Tequeños y Pastelitos

---

## 🎨 Detalles Visuales

### Colores
- **Botones**: Naranja (#F26B38)
- **Indicadores activos**: Naranja
- **Fondo**: Negro
- **Texto**: Blanco

### Tamaño
- **Desktop**: 400px de altura
- **Mobile**: 250px de altura
- **Ancho**: 100% del contenedor

### Animaciones
- **Transición**: Zoom suave (0.5s)
- **Hover en botones**: Cambio de opacidad (0.3s)
- **Fade de imágenes**: Suave y profesional

---

## 🔧 Si Algo No Funciona

### Las imágenes no aparecen
```
✓ Verifica que el servidor está activo
✓ Recarga la página (Ctrl+F5)
✓ Abre la consola (F12) para ver errores
✓ Verifica que las rutas en carousel-manager.js son correctas
```

### Los carruseles no avanzan
```
✓ Comprueba que Bootstrap JS está cargado
✓ Verifica que carousel-manager.js se carga sin errores
✓ Abre la consola y busca errores
```

### Se ve pixelado
```
✓ Las imágenes están optimizadas
✓ Asegúrate de que tienes buena conexión
✓ Las fotos deberían ser 1200x800px mínimo
```

---

## 📍 Ubicación de Archivos

### Imágenes
```
C:\Proyectos\saborconsazon2\assets\img\portfolio\
├── postres\           (6 imágenes)
├── panes\            (2 imágenes)
├── comidas\          (3 imágenes)
└── pasa_bocas\       (4 imágenes)
```

### Código del Carrusel
```
index.php             (HTML de carruseles)
assets/js/carousel-manager.js    (Datos de imágenes)
assets/css/custom.css (Estilos)
```

---

## 💡 Tips

1. **Autoavance**: Mantén el mouse fuera para que avance automáticamente
2. **Pausa**: Coloca el mouse sobre el carrusel para que se pause
3. **Rápido**: Usa los botones para navegar rápidamente
4. **Teclado**: Usa flechas del teclado para navegar
5. **Teléfono**: Los carruseles son totalmente touch-friendly

---

## 🎯 Flujo Típico del Usuario

```
1. Usuario entra en la página
   ↓
2. Scrollea por About y Portfolio
   ↓
3. Llega a GALLERY y ve:
   - Título "Galería de Especialidades"
   - 4 carruseles bien organizados
   ↓
4. Interactúa:
   - Ve el autoavance (5 segundos)
   - Hace clic en botones
   - Hace clic en indicadores
   ↓
5. Impresionado por lo profesional
   ↓
6. Continúa scrolleando
   ↓
7. Llega a Contact y realiza una compra
```

---

## 🚀 ¿Listo?

### Verifica Que Todo Esté Funcionando

- [ ] Servidor iniciado (php -S 127.0.0.1:8000)
- [ ] Navegador abierto en http://127.0.0.1:8000/
- [ ] Scrolleé hasta la sección "Gallery"
- [ ] Vi los 4 carruseles
- [ ] Hice clic en botones anterior/siguiente
- [ ] Vi el autoavance funcionando
- [ ] Hice clic en los puntos (indicadores)
- [ ] ¡Todo funciona perfecto!

---

## 📚 Documentación

Para más detalles, consulta:
- **GALERIA_CARRUSELES.md** - Guía completa
- **GALERIA_VISTA_PREVIA.md** - Vista visual
- **carousel-manager.js** - Código comentado

---

## 🎉 ¡Disfruta!

Tu página ahora tiene una galería **profesional, moderna e interactiva** con carruseles organizados por categoría.

¡Que impresione a tus clientes! 🚀✨

---

**Versión**: 1.0
**Fecha**: Febrero 11, 2026
**Estado**: ✅ Completado y Listo para Usar

