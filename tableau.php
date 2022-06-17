<?php




//$tableau = array("Pomme", "Poire", "Banane"); 
//var_dump($tableau);
//foreach ($tableau as $fruits)
//{
  //  echo $fruits." "."<br>";
//}
// ?>
 <hr>


<?php

$tab1[] = array(1, "janvier", "2016"); 
$tab1[] = array(2, "février", "2017"); 
$tab1[] = array(3, "mars", "2018"); 
$tab1[] = array(4, "avril", "2019");
//foreach ($tab1 as $date)
{
  echo $tab1 [2][0]." ".$tab1 [2][1]." ".$tab1 [2][2]."<br><hr>"; 
}

for($i=0; $i<=3;$i++){
    for($j=0;$j<=2;$j++){
        echo $tab1[$i][$j]." ";
    }
    echo "<br>";
}
?>

<hr>


<?php
//$facture = array(
  //  "Janvier"   =>  500,
    //"Février"   =>  620,
    //"Décembre"  =>  300
//); 
//foreach ($facture as $abo)
//{
  //  echo $abo." ";
//}
?>


<hr>
<sub>Exo 1</sub>
<br>

<?php 
$annee = array 
("janvier"=>31,
"fevrier"=>28,
"mars"=>31,
"avril"=>30,
"mai"=>31,
"juin"=>30,
"juillet"=>31,
"aout"=>31,
"septembre"=>30,
"octobre"=>31,
"novembre"=>30,
"decembre"=>31);

echo "<table border = 1 width = 200>";
//echo "<tr>";
foreach ($annee as $mois => $jour)
{
    //echo " $mois / $jour jours. <br> ";
    echo "<tr>";
    echo "<td>".$mois."</td>";
    echo "<td>".$jour." Jours</td>";
    echo "</tr>";
    //echo "<tr>";
    //echo "<td>"."pour"."</td>";
    //echo "<td>"."moi"."</td>";
    //echo "</tr>";
}
echo "</table>";
?>

<hr>

<sub>Exo 2</sub>
<br>

<?php
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
); //asort ($capitales);
//ksort ($capitales); 
//sort ($capitales);
foreach ($capitales as $capitale => $pays)
{
    echo $capitale." => ".$pays. "<br> ";
    //echo $pays." => ".$capitale.'<br>';
   //echo (sort ($capitales));
  // echo "[".$capitale."] = ".$pays."<br>";
  //echo " Il y a ". count($capitales)." capitales.";
}
?>

<hr>
<sub>Exo 3</sub>
<br>

<?php

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
); ksort($departements);

foreach ($departements as  $region => $departement)
{ 
  
    echo "<strong>".$region."</strong><br>";
  
    foreach ($departement as $dep)
    { 
         echo $dep." <br>";
         
    }
   //echo "il y a ". sizeof($departement)." departements dans cette region.<br>";       
}
?>

<hr>


