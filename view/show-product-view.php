<?php

require_once('partial/header.php');

?>

<!-- <main> -->

<?php // if ($showProduct): ?>
    <!-- <article>
        <h2><?php // echo htmlspecialchars($showProduct['title']); ?></h2>
        <p>Prix : <?php // echo number_format($showProduct['price'], 2); ?> €</p>
        <p>Promo : <?php // echo number_format($showProduct['promotionPrice'], 2); ?> €</p>
        <img src="<?php // echo htmlspecialchars($showProduct['image']); ?>" alt="Image du produit" width="200">
        <p>Catégorie : <?php // echo htmlspecialchars($showProduct['category']); ?></p>
        <p>Publié le : <?php // echo $showProduct['publishedAt']->format('Y-m-d'); ?></p> -->
    <!-- </article> -->
<?php // else: ?> 
    <!-- <p>Aucun produit disponible.</p> -->
<!-- <?php // endif; ?> -->

<!-- </main> -->

<main>
    <article>
    <h2><?php echo htmlspecialchars($showProduct['title']); ?></h2>
        <p>Prix : <?php echo number_format($showProduct['price'], 2); ?> €</p>
        <p>Promo : <?php echo number_format($showProduct['promotionPrice'], 2); ?> €</p>
        <img src="<?php echo htmlspecialchars($showProduct['image']); ?>" alt="Image du produit" width="200">
        <p>Catégorie : <?php echo htmlspecialchars($showProduct['category']); ?></p>
        <p>Publié le : <?php echo $showProduct['publishedAt']->format('Y-m-d'); ?></p>
    </article>

</main>

<?php require_once('partial/footer.php'); ?>

