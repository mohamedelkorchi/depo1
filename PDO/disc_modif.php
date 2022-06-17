

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout</title>
</head>
<body>

    <h1>Artiste n°<?= $resultat->artist_id; ?></h1>

    <br>
    <br>

    <form action ="disc_modif.php" method="post">

        <label for="nom_for_label">Nom de l'artiste :</label><br>
        <input type="text" name="nom" id="nom_for_label">
        <br><br>

        <label for="url_for_label">Adresse site internet :</label><br>
        <input type="text" name="url" id="url_for_label">
        <br><br>

        <input type="reset" value="Annuler">
        <input type="submit" value="Modifier">

    </form>
</body>
</html>