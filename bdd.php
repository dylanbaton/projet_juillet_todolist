<?php
    
$host = 'localhost';
$dbname = 'projet_juillet_todolist';
$user = 'root';
$password = '';
    
$bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';', $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
