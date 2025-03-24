<?php

require_once('../config.php');
require_once('../view/form-product-view.php');
require_once('../model/product-repository.php');

?>

<?php 

$message = null;
var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

if (isset($_POST["titleToAdd"]) &&
		isset($_POST["priceToAdd"]) &&
        isset($_POST["promotionpriceToAdd"]) &&
		isset($_POST["imageToAdd"]) &&
        isset($_POST["categoryToAdd"]) &&
		strlen($_POST["titleToAdd"]) > 3 &&
		is_numeric($_POST["priceToAdd"]) &&
        is_numeric($_POST["promotionpriceToAdd"]) &&
		strlen($_POST["imageToAdd"]) > 5 &&
        strlen($_POST["categoryToAdd"]) > 3
		) {

       createProduct($_POST["titleToAdd"], $_POST["priceToAdd"], $_POST["promotionpriceToAdd"], $_POST["imageToAdd"], $_POST["categoryToAdd"]);

            $message = "Produit créé";
        } else {
            $message = "Veuillez créer un produit en renseignant tous les champs";
        }
    }
?>

<h2><?php echo $message; ?></h2>

<?php require_once('../view/partial/footer.php'); ?>