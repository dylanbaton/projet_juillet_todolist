<?php

require_once 'bdd.php';

$requete='SELECT * FROM taches'; // écriture de la requête
$taches=$bdd->query($requete); // réalisation de la requête

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>To Do List</h1>
    <form action="insertion.php" method="GET">
        <label for="nom">Ajouter Tâches</label>
        <input type="text" id="nom" name="nom">
        <input type="submit" value="Envoyer">
    </form>

    <?php foreach ($taches as $tache) : ?>
        <ul>
          <?= $tache['nom']; ?>
          <a href="traitementDelete.php?id=<?= $tache['id']; ?>">Supprimer</a>  
        </ul>
        
    <?php endforeach; ?>

    
</body>
</html>