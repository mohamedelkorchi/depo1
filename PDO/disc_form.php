<?php
// On charge l'enregistrement correspondant à l'ID passé en paramètre :
    require "db.php";
    $db = connexionBase();
    $requete = $db->prepare("SELECT * FROM artist JOIN disc on disc.artist_id = artist.artist_id ");
    $requete->execute(array($_GET["id"]));
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Ajout</title>
</head>
<body>

    <h1>Modifier un vinyle</h1>

    <br>
    <br>

    <form action ="disc_modif.php" method="post" enctype="multipart/form-data">
    <label for="title">Title</label><br>
        <input type="text" name="title" id="title"  class="custom-select  custom-select-sm" value="<?= $myArtist->disc_title?>" >
        <br>
        <label for="year">Year</label><br>
        <input type="text" name="year" id="year"  class="custom-select  custom-select-sm"  value="<?=$myArtist->disc_year?>" >
        <br>
        <label for="label">Label</label><br>
        <input type="text" name="label" id="label"  class="custom-select  custom-select-sm"  value="<?=$myArtist->disc_label?>" >
        <br>
        <label for="artist">Artist </label><br>
        <select name="artistSelect" id="input2Modif" class="custom-select  custom-select-sm">
                <!-- <option selected>Choose artist</option> -->
                <?php foreach ($myArtist as $a) {
                    echo '<option name="artistModif" value="' . $a['artist_id'] . '">' . $a['artist_name'] . '</option>';
                }; ?>
        </select> 
        <input id="prodId" name="id" type="hidden" value="<?php echo $myArtist -> disc_id ?>">       
        <br>
        <label for="genre">Genre</label><br>
        <input type="text" name="genre" id="genre"   value="<?=$myArtist->disc_genre?>" >
        <br>
        <label for="price">Price</label><br>
        <input type="text" name="price" id="price"  class="custom-select  custom-select-sm" value="<?=$myArtist->disc_price ?>" >
        <br>
        Picture <br>
        <img src="jaquettes/<?= $myArtist-> disc_picture; ?>" alt="<?= $myArtist-> disc_picture;?>"
                title=" <?= $myArtist->disc_title; ?>"><br>
                <br>  
    </form>
    <a class="btn btn-primary" href="disc_modif.php?id=<?= $myArtist->disc_id ?>">Modifier</a> 
        <a href="disc_detail.php" type="button" class="btn btn-primary">Retour</a>

</body>
</html>