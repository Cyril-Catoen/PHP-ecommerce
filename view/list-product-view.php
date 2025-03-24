<?php

require_once('partial/header.php');

?>

<main>

<h1>Bonjour</h1>
<h2>Liste des produits commercialisés :</h2>
<section>
<?php foreach ($products as $index => $product){ 
    
    if ($product['isPublished'] == true){?>

<article>
    <h2><?php echo $product['title'] ?></h2>
    <p><?php echo $product['price'] ?> euros</p>
    <p><?php echo $product['promotionPrice'] ?> euros</p>
    <img src="<?php echo $product['image'] ?>" alt="">
    <p class="ftwght-bold"><?php echo $product['category'] ?></p>
    <p>Publié le : <?php echo $product['publishedAt'] -> format('Y-m-d') ?></p>
</article>
<?php }} ?>
</section>

</main>

<?php require_once('partial/footer.php'); ?>
