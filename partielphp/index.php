<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </table>

<?php
		$mysqli = new mysqli("localhost", "root", "root", "partielphp");
		$mysqli->set_charset("utf8");
		$requete = "SELECT * FROM partielphp";
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
			echo nl2br ($ligne['id'] . '. ' . $ligne['nom'] . ' ' . $ligne['prenom'] . ' ' . $ligne['age']."\n");
            
		}
		$mysqli->close();
?>

    </div>
</body>

</html>