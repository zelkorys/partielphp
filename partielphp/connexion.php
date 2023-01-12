<?php

// Connexion a la base de donnnée avec PDO suivi de la base de donnée , nom de l'hote , identifiant et mot de passe;

 $pdo= new PDO('mysql:dbname=partielphp;host=localhost','root','root');

   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>