<?php

require_once 'bdd.php';

$id = $_GET["id"];

$query = "DELETE FROM taches WHERE id = $id";

$execution=$bdd->exec($query);

header('Location: exoSelect.php');

?>