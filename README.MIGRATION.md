Migración y refactor ligera a PHP - Klaire's Cake

Qué hice:
- Creé plantillas PHP: `templates/header.php`, `templates/footer.php`.
- Convertí la página principal a `index.php` e integré header/footer.
- Añadí `assets/css/custom.css` con variables de marca y helpers.
- Reescribí `forms/contact.php` con validación/sanitización y soporte PHPMailer/fallback.
- Añadí `config/mail.example.php` y `.gitignore` para evitar subir credenciales.

Pruebas locales rápidas (Powershell):
Set-Location 'C:\Proyectos\saborconsazon2'; php -S 127.0.0.1:8000
Abrir http://127.0.0.1:8000/

Configurar envío de correo (opcional):
- Copiar `config/mail.example.php` a `config/mail.php` y rellenar credenciales SMTP.
- Instalar PHPMailer con Composer (recomendado):
  Set-Location 'C:\Proyectos\saborconsazon2'; composer require phpmailer/phpmailer

Reemplazo de marca:
- Realicé reemplazos visibles en `index.php` y header/footer para mostrar "Klaire's Cake".
- No cambié automáticamente los social handles (ej: instagram.com/saborconsazon2). Si quieres, puedo actualizar esos enlaces.

Siguientes pasos recomendados:
- Revisar y adaptar imágenes de logo (assets/img/logo1.jpeg) con diseño nuevo.
- Actualizar CSS detalladamente: migrar reglas de `assets/css/style.css` a utilidades de Bootstrap y `custom.css`.
- Ejecutar pruebas visuales y accesibilidad (Lighthouse).
- Opcional: migrar portfolio a un JSON y generar dinámicamente.

