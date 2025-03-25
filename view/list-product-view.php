<?php

require_once('partial/header.php');

?>

<main>

<form method="get">

        <div class="w80">
                <select name="sortToApply">
                        <option selected disabled>Choisissez la méthode de tri des produits</option>
                        <option value="Date">Trier par date</option>
                        <option value="Titre">Trier par titre</option>
                </select>
        </div>

        <input id="submit" type="submit">
</form>

<h1>Bonjour</h1>
<h2>Liste des produits commercialisés :</h2>
<section>
<?php // Ensuite, tu peux afficher la liste des produits publiés
foreach ($products as $index => $product) {
    ?>
    <article>
        <h2><?php echo $product['title'] ?></h2>
        <p><?php echo $product['price'] ?> euros</p>
        <p><?php echo $product['promotionPrice'] ?> euros</p>
        <img src="<?php echo $product['image'] ?>" alt="">
        <p class="ftwght-bold"><?php echo $product['category'] ?></p>
        <p>Publié le : <?php echo $product['publishedAt']->format('Y-m-d') ?></p>
        <a href="show-product-controller.php?index=<?php echo $index; ?>">Voir le produit</a>
    </article>
<?php } ?>
</section>

</main>

<?php require_once('partial/footer.php'); ?>
