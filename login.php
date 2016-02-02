<?php
var_dump($_POST);

try
{
    $pdo = new PDO('mysql:host=192.168.240.23;port:3306;dbname=jsevents','root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump($pdo);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>