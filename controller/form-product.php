<?php

require_once('../config.php');
require_once('../view/form-product-view.php');
require_once('../model/product-repository.php');

$message = null;
$errors = [];

// Debugging POST data (to be removed in production)
var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Vérification de la validité des champs du formulaire
    if (isset($_POST["titleToAdd"]) &&
        isset($_POST["priceToAdd"]) &&
        isset($_POST["promotionpriceToAdd"]) &&
        isset($_POST["imageToAdd"]) &&
        isset($_POST["categoryToAdd"])) {

        // Validation du titre
        if (strlen($_POST["titleToAdd"]) <= 5) {
            $errors[] = "Le titre doit contenir plus de 5 caractères.";
        }

        // Validation du prix
        if (!is_numeric($_POST["priceToAdd"]) || $_POST["priceToAdd"] <= 0) {
            $errors[] = "Le prix doit être un nombre supérieur à 0.";
        }

        // Validation du prix promotionnel
        if (!is_numeric($_POST["promotionpriceToAdd"]) || $_POST["promotionpriceToAdd"] <= 0) {
            $errors[] = "Le prix promotionnel doit être un nombre supérieur à 0.";
        } elseif ($_POST["promotionpriceToAdd"] >= $_POST["priceToAdd"]) {
            $errors[] = "Le prix promotionnel doit être inférieur au prix original.";
        }

        // Validation de l'image
        if (strlen($_POST["imageToAdd"]) <= 5) {
            $errors[] = "L'URL de l'image doit contenir plus de 5 caractères.";
        }

       // Liste des catégories valides
        $validCategories = ["Réfrigérateur", "Lave-Linge", "Lave-vaisselle", "Micro-ondes", "Fours"];

        // Validation de la catégorie
        if (!in_array($_POST["categoryToAdd"], $validCategories)) {
        $errors[] = "Veuillez choisir une catégorie valide.";
        }

        // Si aucune erreur n'a été détectée, on crée le produit
        if (empty($errors)) {
            createProduct($_POST["titleToAdd"], $_POST["priceToAdd"], $_POST["promotionpriceToAdd"], $_POST["imageToAdd"], $_POST["categoryToAdd"]);
            $message = "Produit créé avec succès.";
        } else {
            // Affichage des erreurs
            $message = "Veuillez corriger les erreurs suivantes :<br>" . implode('<br>', $errors);
        }
    } else {
        $message = "Veuillez remplir tous les champs.";
    }
}
?>

<h2><?php echo $message; ?></h2>

<?php require_once('../view/partial/footer.php'); ?>
