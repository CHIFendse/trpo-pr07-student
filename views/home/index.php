<section class="hero-block">
    <h1><?= htmlspecialchars($title) ?></h1>
    <p class="subtitle"><?= htmlspecialchars($description) ?></p>
</section>

<section class="features-block">
    <h2>Наши преимущества</h2>
    <div class="cards-grid">
        <?php foreach ($features as$feature): ?>
            <div class="card">
                <p><?= htmlspecialchars((string)$feature) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>