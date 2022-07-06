<?php

include "class.employe.php";
include "class.magasin.php";

$madate = new DateTime('05/04/2006');
$lea = new DateTime('01/01/2021');

$employe1 = new Employe('mohamed', 'elkorchi', $madate, '42000', 'securité');
$employe2 = new Employe('lea', 'poiret', $lea, '46000', 'graphiste');

//$employe1 = new Employe('mohamed', 'elkorchi', new DateTime('05/04/2006', 'd/m/Y'), '42 000€', 'securité', $_date = 'now');


$employe1->presentation();
$employe1->calculDate();
$employe1->calculPrime();

$employe2->presentation();
$employe2->calculDate();
$employe2->calculPrime();