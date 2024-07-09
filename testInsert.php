<?php

require_once 'bdd.php';

$ajouter_taches= $_GET["ajouter_taches"];

$query="INSERT INTO taches(ajouter_taches ) VALUES('$ajouter_taches')";

$execution=$bdd->exec($query);

header('Location: exoSelect.php');

?>