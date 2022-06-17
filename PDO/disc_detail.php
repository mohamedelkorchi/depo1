<?php
    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = connexionBase();

    // On récupère l'ID passé en paramètre :
    $id = $_GET["id"];

    // On crée une requête préparée avec condition de recherche :
    $requete = $db->prepare("SELECT * FROM artist join disc on disc.artist_id = artist.artist_id WHERE disc_id=?");
    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    
    $requete->closeCursor();
    if ($myArtist == null)
    {
        header("Location:discs.php");
    }
    //var_dump($myArtist);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>PDO - Détail</title>
    </head>
    <body>
      <form action="disc_detail.php" method="post">
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title"  value="<?= $myArtist->disc_title?>" >
        <br>
        <label for="year">Year</label><br>
        <input type="text" name="year" id="year"  value="<?=$myArtist->disc_year?>" >
        <br>
        <label for="label">Label</label><br>
        <input type="text" name="label" id="label"  value="<?=$myArtist->disc_label?>" >
        <br>
        <label for="artist">Artist</label><br>
        <input type="text" name="artist" id="artist"  value="<?=$myArtist->artist_name ?>" >
        <br>
        <label for="genre">Genre</label><br>
        <input type="text" name="genre" id="genre"  value="<?=$myArtist->disc_genre?>" >
        <br>
        <label for="price">Price</label><br>
        <input type="text" name="price" id="price"  value="<?=$myArtist->disc_price ?>" >
        <br>
        Picture <br>
        <img src="jaquettes/<?= $myArtist-> disc_picture; ?>" alt="<?= $myArtist-> disc_picture;?>"
                title=" <?= $myArtist->disc_title; ?>"><br>
                <br>
      </form>
        <a class="btn btn-primary" href="disc_form.php?id=<?= $myArtist->disc_id ?>">Modifier</a> 
        <a class="btn btn-primary" href="disc_delete.php?id=<?= $myArtist->disc_id ?>">Supprimer</a>
        <a href="discs.php" type="button" class="btn btn-primary">Retour</a>

    </body>
</html>