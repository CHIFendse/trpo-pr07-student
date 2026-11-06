<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Интернет-магазин') ?></title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="container header-container">
            <a href="/" class="brand">ShopMVC</a>
            <nav class="nav-menu">
                <a href="/">Главная</a>
                <a href="/catalog">Каталог</a>
            </nav>
        </div>
    </header>

    <main class="container content">
        <?= $content ?>
    </main>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; <?= date('Y') ?> ТРПО ПР-07. Учебный MVC-магазин.</p>
        </div>
    </footer>
</div>
</body>
</html>