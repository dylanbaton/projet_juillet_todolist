<?php

require_once 'bdd.php';

$nom= $_GET["nom"];

$query="INSERT INTO taches(nom ) VALUES('$nom')";

$execution=$bdd->exec($query);

header('Location: index.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <input type="checkbox" id="nom" name="nom" checked />
  </div>
</body>
</html>