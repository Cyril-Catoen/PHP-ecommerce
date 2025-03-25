<?php

require_once('../config.php');
require_once('../model/product-repository.php');


//  $Allproducts =  getProducts();
//  $firstProduct = $Allproducts[0] ?? null; // Vérifie s'il y a au moins un produit

$index = $_GET["index"];

$showProduct = $products[$index];

require_once('../view/show-product-view.php')
?>
