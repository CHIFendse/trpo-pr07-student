<?php
declare(strict_types=1);

namespace App\Core;

final class View
{
    public static function render(string $template, array$data = []): void
    {
        extract($data);
        $contentFile = __DIR__ . '/../../views/' .$template . '.php';

        if (!file_exists($contentFile)) {
            throw new \RuntimeException("Шаблон {$contentFile} не найден");
        }

        ob_start();
        require $contentFile;
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layout.php';
    }
}