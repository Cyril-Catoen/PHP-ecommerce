<?php

require_once('partial/header.php');

?>

<main>

<?php if ($firstProduct): ?>
    <article>
        <h2><?php echo htmlspecialchars($firstProduct['title']); ?></h2>
        <p>Prix : <?php echo number_format($firstProduct['price'], 2); ?> €</p>
        <p>Promo : <?php echo number_format($firstProduct['promotionPrice'], 2); ?> €</p>
        <img src="<?php echo htmlspecialchars($firstProduct['image']); ?>" alt="Image du produit" width="200">
        <p>Catégorie : <?php echo htmlspecialchars($firstProduct['category']); ?></p>
        <p>Publié le : <?php echo $firstProduct['publishedAt']->format('Y-m-d'); ?></p>
    </article>
<?php else: ?>
    <p>Aucun produit disponible.</p>
<?php endif; ?>

</main>

<?php require_once('partial/footer.php'); ?>

