# Klaire's Cake - Guía Rápida

## 🚀 Iniciar el Servidor Local

```powershell
Set-Location 'C:\Proyectos\saborconsazon2'
php -S 127.0.0.1:8000
```

Luego abre en tu navegador:
- **http://127.0.0.1:8000/**

## 📝 Cambios Principales Realizados

### ✨ Mejoras Visuales
1. **Hero Section** - Gradiente moderno con onda SVG
2. **Portfolio** - Grid de 6 productos con efectos hover
3. **Características** - 6 cajas con iconos y descripción
4. **Navbar** - Fijo, translúcido con efectos hover
5. **Footer** - Tres columnas con información completa

### 🎨 Estilos Profesionales
- Colores consistentes con paleta de marca
- Transiciones suaves en elementos interactivos
- Sombras sutiles para profundidad
- Tipografía mejorada (Inter y Montserrat)
- Responsive design completo

### 📱 Características Responsive
- Mobile-first approach
- Breakpoints optimizados
- Navegación móvil funcional
- Imágenes adaptativas

## 🛠️ Personalización Recomendada

### 1. Logo
Reemplaza `assets/img/logo1.jpeg` con tu logo profesional:
- Tamaño recomendado: 200x200px
- Formato: PNG con transparencia o JPG

### 2. Títulos de Productos
En `index.php`, actualiza los títulos:
```php
$items = [
  ['src' => 'assets/img/portfolio/portfolio-1.jpg', 'title' => 'Tu Producto 1', 'cat' => 'Categoría'],
  // ...
];
```

### 3. Información de Contacto
En `index.php` y `templates/footer.php`, actualiza:
- Dirección: "Alajuela centro, Urb. la Baviera"
- Teléfono: "+506 7215 6759"
- Horarios: "Lun-Vie 8AM-6PM / Sab 8AM-4PM"
- Enlaces sociales

### 4. Imagen de Fondo del Hero
Reemplaza `assets/img/bg.jpg` con una imagen profesional de productos

## 📧 Configurar Envío de Correos

1. Copia `config/mail.example.php` a `config/mail.php`
2. Rellena tus credenciales SMTP
3. (Opcional) Instala PHPMailer:
```powershell
composer require phpmailer/phpmailer
```

## 🎯 Estructura de Archivos Importante

```
saborconsazon2/
├── index.php                    ← Página principal
├── forms/
│   └── contact.php             ← Procesador de contacto
├── templates/
│   ├── header.php              ← Navbar y meta tags
│   └── footer.php              ← Footer
├── assets/
│   ├── css/
│   │   ├── style.css           ← Estilos base
│   │   └── custom.css          ← Estilos personalizados
│   ├── js/
│   │   ├── main.js             ← Scripts principales
│   │   └── image-handler.js    ← Manejador de imágenes
│   └── img/
│       ├── logo1.jpeg          ← Logo (personalizar)
│       ├── bg.jpg              ← Fondo hero (personalizar)
│       └── portfolio/          ← Imágenes de productos
└── config/
    └── mail.example.php        ← Configuración de correos
```

## 🎨 Colores de Marca

- **Primario**: #F26B38 (Naranja)
- **Oscuro**: #2A2D3E (Gris oscuro)
- **Crema**: #FFF6EE (Fondo claro)
- **Gris claro**: #F8F9FA

Para cambiar colores, edita las variables CSS en `assets/css/custom.css`:
```css
:root {
  --brand-primary: #F26B38;
  /* ... */
}
```

## 🔍 Verificación de Funcionalidad

- [ ] Hero section se ve correctamente
- [ ] Navbar es sticky al hacer scroll
- [ ] Productos muestran efecto hover
- [ ] Formulario de contacto es funcional
- [ ] Enlaces internos navegan correctamente
- [ ] Redes sociales redirigen
- [ ] Página es responsive en móvil

## 📞 Información de Contacto en la Página

**Ubicación**: Alajuela Centro, Urbanización La Baviera
**WhatsApp**: +506 7215 6759
**Facebook**: facebook.com/saborconsazon2-2356303821079923
**Instagram**: instagram.com/saborconsazon2/

## 🚀 Próximos Pasos

1. **Contenido**
   - Actualizar fotos de productos reales
   - Mejorar descripciones
   - Agregar precios (si es necesario)

2. **Funcionalidad**
   - Implementar carrito de compras (opcional)
   - Agregar sistema de pedidos
   - Integrar con WhatsApp Business

3. **Marketing**
   - Agregar Google Analytics
   - Implementar SEO
   - Crear estrategia de redes sociales

4. **Técnico**
   - Configurar SSL/HTTPS
   - Backup automático
   - Monitoreo de performance

## 💡 Consejos

- Usa imágenes de alta calidad (mínimo 1200x800px)
- Mantén los textos concisos y atractivos
- Actualiza las imágenes del portfolio regularmente
- Responde rápido a consultas de contacto
- Usa consistencia en tipografía y colores

## 📞 Soporte

Para problemas o consultas sobre el desarrollo:
- Revisa el archivo `CAMBIOS.md` para detalles técnicos
- Verifica que PHP 7.4+ esté instalado
- Asegúrate de que el puerto 8000 esté disponible

---

**Versión**: 2.0 (Mejoramiento Profesional)
**Última Actualización**: Febrero 2026

