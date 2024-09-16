<?php
if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        return \Carbon\Carbon::parse($date)->translatedFormat('j \\de F \\de Y');
    }
}

if (!function_exists('resize_image')) {
    function resize_image($path, $width, $height) {
        $fullPath = storage_path('app/public/' . $path);

        if (!file_exists($fullPath)) {
            throw new Exception("File does not exist: $fullPath");
        }

        list($originalWidth, $originalHeight, $type) = getimagesize($fullPath);

        $src = null;
        switch ($type) {
            case IMAGETYPE_JPEG:
                $src = imagecreatefromjpeg($fullPath);
                break;
            case IMAGETYPE_PNG:
                $src = imagecreatefrompng($fullPath);
                imagealphablending($src, false);
                imagesavealpha($src, true);
                break;
            case IMAGETYPE_GIF:
                $src = imagecreatefromgif($fullPath);
                break;
            default:
                throw new Exception('Unsupported image type.');
        }

        // Redimensiona a imagem mantendo a proporção
        $ratio = $originalWidth / $originalHeight;
        if ($width / $height > $ratio) {
            $newWidth = $width;
            $newHeight = $width / $ratio;
        } else {
            $newWidth = $height * $ratio;
            $newHeight = $height;
        }

        $resized = imagecreatetruecolor($newWidth, $newHeight);
        if ($type == IMAGETYPE_PNG) {
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            $transparent = imagecolorallocatealpha($resized, 0, 0, 0, 127);
            imagefilledrectangle($resized, 0, 0, $newWidth, $newHeight, $transparent);
        }

        imagecopyresampled($resized, $src, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

        // Corta a imagem para o tamanho desejado centralizando o conteúdo
        $cropped = imagecreatetruecolor($width, $height);
        if ($type == IMAGETYPE_PNG) {
            imagealphablending($cropped, false);
            imagesavealpha($cropped, true);
            $transparent = imagecolorallocatealpha($cropped, 0, 0, 0, 127);
            imagefilledrectangle($cropped, 0, 0, $width, $height, $transparent);
        }

        $xOffset = ($newWidth - $width) / 2;
        $yOffset = ($newHeight - $height) / 2;
        imagecopyresampled($cropped, $resized, 0, 0, $xOffset, $yOffset, $width, $height, $width, $height);

        $resizedPath = 'social/' . basename($path);
        switch ($type) {
            case IMAGETYPE_JPEG:
                imagejpeg($cropped, storage_path('app/public/' . $resizedPath), 100);
                break;
            case IMAGETYPE_PNG:
                imagepng($cropped, storage_path('app/public/' . $resizedPath), 0);
                break;
            case IMAGETYPE_GIF:
                imagegif($cropped, storage_path('app/public/' . $resizedPath));
                break;
        }

        imagedestroy($src);
        imagedestroy($resized);
        imagedestroy($cropped);

        return 'storage/' . $resizedPath;
    }
}
