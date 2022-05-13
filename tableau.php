<?php




$tableau = array("Pomme", "Poire", "Banane"); 
//var_dump($tableau);
foreach ($tableau as $fruits)
{
    echo $fruits." "."<br>";
}
?>
 <hr>


<?php

$tab1[] = array(1, "janvier", "2016"); 
$tab1[] = array(2, "février", "2017"); 
$tab1[] = array(3, "mars", "2018"); 
$tab1[] = array(4, "avril", "2019");
foreach ($tab1 as $date)
{
    echo $tab1 [2][0]." ".$tab1 [2][1]." ".$tab1 [2][2]."<br>"; 
}
?>

<hr>


<?php
$facture = array(
    "Janvier"   =>  500,
    "Février"   =>  620,
    "Décembre"  =>  300
); 
foreach ($facture as $abo)
{
    echo $abo." ";
}
?>

<hr>


<?php 

?>