<?php

require_once('../config.php');
require_once('../model/product-repository.php');

$message = null;
$publishedProducts = [];

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['sortToApply']) && $_GET['sortToApply'] !== 'Choisissez la méthode de tri des produits') {
    $sortMethod = $_GET['sortToApply']; // Récupérer la méthode de tri sélectionnée

    // Récupérer les produits publiés, triés en fonction de la méthode choisie
    $publishedProducts = getPublishedProducts($sortMethod);
}

require_once('../view/list-product-view.php')
?>
