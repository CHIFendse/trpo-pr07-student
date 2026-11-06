<section>
    <h1><?= htmlspecialchars($title) ?></h1>
    <div class="cards-grid">
        <?php foreach ($products as$item): ?>
            <article class="card product-card">
                <h3><?= htmlspecialchars((string)$item['name']) ?></h3>
                <p class="price"><?= number_format((float)$item['price'], 2, '.', ' ') ?> ₽</p>
            </article>
        <?php endforeach; ?>
    </div>
</section>