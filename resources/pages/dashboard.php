<?php require_once __DIR__ . '/../base/header.php';
/**
 * @var string $dashboard
 * @var array $numbers
 */
?>
<h1> <?= $dashboard ?> </h1>
<div class="row">
    <?php foreach ($numbers as $number): ?>
        <a class="btn btn-primary mb-2" href="/invoices?number_id=<?=$number?>">
            Number ID: <?= $number ?>
        </a>
    <?php endforeach; ?>
</div>
<?php require_once __DIR__ . '/../base/footer.php'; ?>
