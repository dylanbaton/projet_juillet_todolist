<?php

require_once 'bdd.php';

$requete='SELECT * FROM taches'; // écriture de la requête
$taches=$bdd->query($requete); // réalisation de la requête

$requete = 'SELECT categories FROM taches'; // écriture de la requête
$categories = $bdd->query($requete); // réalisation de la requête        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="boite">
        <h1>To Do List</h1>
        <form action="insertion.php" method="GET">
        <select name="categories" id="categories">
                <option value="">Ajouter un produit</option>
                <option value="alimentation">Aliment</option>
                <option value="boisson">Boisson</option>
                <option value="produit_bebe">Produit bebe</option>
            </select>
            <label class="ajouter" for="nom">Ajouter</label>
            <input type="text" id="nom" name="nom">
            <input type="submit" value="Ajouter">
        </form>
 
        <div class="container">
            <?php foreach ($taches as $tache) : ?>
                <div class="card">
                    <ul>
                        <div class="fond">
                            <input class="bouton-check" type="checkbox" id="nom <?= $tache['id']; ?>" />
                            <span class="texte"><?= $tache['nom']; ?></span>
                            <a class="bouton-delete" href="traitementDelete.php?id=<?= $tache['id'];?>"><img src="image/icon/supprimer.png" alt="Icône delete"></a>  
                        </div> 
                    </ul>
                </div>
            <?php endforeach; ?> 
        </div>
        
    </div> 
</body>
</html>