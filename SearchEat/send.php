<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$bdd->exec('INSERT INTO UTILISATEUR()');

echo 'L utilisateur a été ajouté';
?>
?>