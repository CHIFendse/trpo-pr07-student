<?php
declare(strict_types=1);

namespace App\Controller;

use App\Core\View;

final class CatalogController
{
    public function index(): void
    {
        // В ПР-07 по заданию используется тестовый массив (модели подключаются в ПР-08)
        $products = [
            ['id' => 1, 'name' => 'Клавиатура игровая', 'price' => 3500],
            ['id' => 2, 'name' => 'Мышь беспроводная', 'price' => 2200],
            ['id' => 3, 'name' => 'Коврик для мыши XL', 'price' => 900],
        ];

        View::render('catalog/index', [
            'title' => 'Каталог товаров',
            'products' => $products
        ]);
    }
}