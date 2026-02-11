<?php
/**
 * Get Images API - Klaire's Cake
 * Devuelve lista de imágenes JPG/JPEG de assets/img (recursivo)
 */

header('Content-Type: application/json');

// Ruta correcta a la carpeta assets/img
$imageDir = __DIR__ . '/assets/img';
$images = [];

// Extensiones permitidas
$allowedExtensions = ['jpg', 'jpeg'];

if (is_dir($imageDir)) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($imageDir));
    foreach ($iterator as $fileInfo) {
        if ($fileInfo->isDir()) continue;
        $fileName = $fileInfo->getFilename();
        // Verificar extensión
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (!in_array($ext, $allowedExtensions)) continue;

        // Obtener la ruta relativa desde la raíz del proyecto (assets/img/...)
        $filePath = str_replace('\\', '/', $fileInfo->getPathname());
        // Normalizar para usar rutas web relativas
        $relative = substr($filePath, strlen(__DIR__) + 1);
        // URL-encode sólo el segmento del filename para seguridad
        $dirPart = dirname($relative);
        $encoded = $dirPart . '/' . rawurlencode($fileName);
        $images[] = $encoded;
    }
}

// Ordenar imágenes alfabéticamente
sort($images);

// Responder en JSON
echo json_encode([
    'success' => true,
    'count' => count($images),
    'images' => $images
]);
?>
