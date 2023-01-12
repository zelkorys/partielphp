<?php

    include ('connexion.php');



    if (isset($_POST['Ajouter'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];


    $req = "INSERT INTO partielphp (nom, prenom, age) VALUES(?,?,?)";
    $execute = $pdo->prepare($req);
    $stm = $execute->execute([$nom, $prenom, $age]);
    echo "<center>inscription effectué avec success !</center>";
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un utilisateur</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prenom</label>
            <input type="text" name="prenom">
            <label>âge</label>
            <input type="number" name="age">
            <button class=" btn btn-primary" type="submit" name="Ajouter">Enregistrer</button>
        </form>
    </div>
</body>

</html>