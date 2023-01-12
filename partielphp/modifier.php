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
        <h2>Modifier l'employé : </h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value="">
            <label>Prénom</label>
            <input type="text" name="prenom" value="">
            <label>âge</label>
            <input type="number" name="age" value="">
            <button class=" btn btn-primary" type="submit" name="Modifier">Modifier</button>

            <?php

            include ('connexion.php');
        
            if (isset($_POST['Modifier'])) {
        
        
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
        
        
            $req = "UPDATE partielphp (nom, prenom, age) VALUES(?,?,?)";
            $execute = $pdo->prepare($req);
            $stm = $execute->execute([$nom, $prenom, $age]);
            echo "<center>modification effectué avec success !</center>";
            }
            ?> 
        </form>
    </div>
</body>


</html>