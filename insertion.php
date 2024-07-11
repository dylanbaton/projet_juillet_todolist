<?php

require_once 'bdd.php';

$nom= $_GET["nom"];

$query="INSERT INTO taches(nom ) VALUES('$nom')";

$execution=$bdd->exec($query);

header('Location: index.php');

?>