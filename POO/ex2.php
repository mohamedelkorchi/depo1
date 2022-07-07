<?php

include "class.employe.php";
include "class.magasin.php";

$madate = new DateTime('05/04/2006');
$lea = new DateTime('01/01/2021');

// $magasin1 = new Magasin ("Jarditou", "2 rue balzac", "95243","Paris");
// $magasin2 = new Magasin ("Jarditou", "28 rue mozart", "67243","Starsbourg");

//$employe1 = new Employe('mohamed', 'elkorchi', $madate, '42000', 'securité');
$employe2 = new Employe('lea', 'poiret', $lea, '46000', 'graphiste'/*, $magasin1*/);

$employe1 = new Employe('mohamed', 'elkorchi', new DateTime('05/04/2006'), '42000', 'securité'/*, $magasin2*/);



//$magasin1->magasin();
$employe1->presentation();
$employe1->calculDate();
$employe1->calculPrime();

//$magasin2->magasin();
$employe2->presentation();
$employe2->calculDate();
$employe2->calculPrime();
