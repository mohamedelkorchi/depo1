<?php

    // on importe le contenu du fichier "db.php"
    include "db.php";
    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();
    //var_dump($db);
    // on lance une requête pour chercher toutes les fiches d'artistes
    $requete = $db->query("SELECT * FROM disc join artist on disc.artist_id = artist.artist_id ");
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();
   // var_dump($tableau);
   $cd = 0;
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PDO - Liste</title>
</head>
<body>
<div class="ajout">    
<form action ="disc_new.php" method="post">
    <input class="btn btn-primary" type="submit" value="Ajouter">
</div>    
<?php foreach ($tableau as $disc): $cd++; ?> <?php endforeach; ?>
    <h1>Liste des disques (<?php echo $cd?>)</h1>


    <div class="container-fluid">
    <?php if (isset($_GET["erreur"]) && $_GET["erreur"]=="vide") { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>erreur</strong> pas d'ID.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
    <?php } ?>    

        <table>
           
            <?php foreach ($tableau as $disc): ?>
        
            <?php //var_dump($artist); // Le var_dump() est écrit à titre informatif ?>
            <tr>
                <th><img src="jaquettes/<?= $disc->disc_picture?>" width = "40%" height = "40%"     margin-right: 0px></th>
                <td><h2><?= $disc ->disc_title ?></h2>
                    <p><b>Artist name : </b>  <?= $disc->artist_name ?></p>
                    <p><b>Label : </b><?= $disc ->disc_label ?> </p>
                    <p><b>Year : </b> <?= $disc ->disc_year ?> </p>
                    <p><b> Genre : </b><?= $disc->disc_genre ?> </p>
                    <a href="disc_detail.php?id=<?= $disc->disc_id ?>"> <button type="button" class="btn btn-primary">Détail</button></a>
                </td>
            </tr>

            <?php endforeach; ?>
            

        </table>
    </div>    
</body>
</html>