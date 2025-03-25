<?php
require_once('partial/header.php');
?>

<main>
    <h1>Créer un produit</h1>
    <form method="post">
        <div class="w80">
                <input type="text" name="titleToAdd" placeholder="Entrez le nom de votre produit">
        </div>

        <div class="w80">
                <input type="text" name="priceToAdd" placeholder="Saisissez le prix de votre produit">
        </div>
        
        <div class="w80">
                <input type="text" name="promotionpriceToAdd" placeholder="Saisissez le prix promotionnel de votre produit">
        </div>

        <div class="w80">
                <input type="url" name="imageToAdd" placeholder="Insérez le lien vers l'image de votre produit">
        </div>

        <div class="w80">
                <select name="categoryToAdd">
                        <option selected disabled>Choisissez la catégorie</option>
                        <option value="Réfrigérateur">Réfrigérateur</option>
                        <option value="Lave-Linge">Lave-Linge</option>
                        <option value="Lave-vaisselle">Lave-vaisselle</option>
                        <option value="Micro-ondes">Micro-ondes</option>
                        <option value="Fours">Fours</option>
                </select>
        </div>

        <input id="submit" type="submit">
    </form>

</main>

