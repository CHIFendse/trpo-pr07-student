<?php
declare(strict_types=1);

namespace App\Controller;

use App\Core\View;

final class HomeController
{
    public function index(): void
    {
        $pagesJsonPath = __DIR__ . '/../../data/pages.json';
        $data = file_exists($pagesJsonPath) 
            ? json_decode((string)file_get_contents($pagesJsonPath), true) 
            : [];

        $homeData =$data['home'] ?? [
            'title' => 'Главная страница',
            'description' => 'Добро пожаловать в наш магазин!',
            'features' => ['Широкий ассортимент', 'Быстрая доставка', 'Гарантия качества']
        ];

        View::render('home/index', [
            'title' => $homeData['title'] ?? 'Главная страница',
            'description' => $homeData['description'] ?? '',
            'features' => $homeData['features'] ?? []
        ]);
    }
}