<h1>To Do List</h1>
    <form action="testInsert.php" method="GET">
        <label for="ajouter_taches">Ajouter Tâches</label>
        <input type="text" id="ajouter_taches" name="ajouter_taches">
        <input type="submit" value="Envoyer">
    </form>

<?php

require_once 'bdd.php';

$requete='SELECT * FROM taches'; // écriture de la requête
$reponse=$bdd->query($requete); // réalisation de la requête

foreach ($reponse as $info) {
	echo
"Produit : " . $info['ajouter_taches'] . '<a class=delete href=traitementdelete.php?id=' . $info['id'] . '> suprimer</a>' . "<br>";
}
?>