<?php
//echo time()."<br>";
// echo "Nous sommes le " . date("d-m-Y").", il est ".date("H:i:s")."<br>";
// echo date("H:i")."<br>";
// echo date_default_timezone_set("Europe/Paris");

// $datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
// $date = "2015-14-16";

// if (preg_match($datePattern, $date))
// {
//     echo "Date ".$date." valide.<br>";
// }
// else
// {
//     echo "Date ".$date." erronée.<br>";
// }

// $oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "17/25/1966 03:42:11");

// $errors = DateTime::getLastErrors();

// if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
//     echo "ARGHHHH ! <br>";
// }
?>

<hr>
<sub>exo1</sub>
<br>
<?php
$ddate = "2019-07-19";
        $date = new DateTime($ddate);
        $week = $date->format("W");
        echo "la date du ".$ddate." est la ".$week."eme semaine de l'année <br>";
?>

<hr>
<sub>exo2</sub>
<br>
<?php
$debut = new DateTime('now');
$fin = new DateTime('2022-07-27');
$entredeux = $debut->diff($fin);
echo $entredeux->format(" il reste  %R%a jours avant la fin du prochain MS");
?>

<hr>
<sub>exo3</sub>
<br>
<?php
// function est_bissextile($annee)
// {
//     return date("m-d", strtotime("$annee-02-29")) == "02-29";}
//    // echo est_bissextile('2015'); // 0
// echo est_bissextile('2016')."<br>"; // 1
// echo est_bissextile('2017')."<br>"; // 0
// echo est_bissextile('2018')."<br>"; // 0
// echo est_bissextile('2019')."<br>"; // 0
// echo est_bissextile('2020')."<br>"; // 1

function estAnneeBissextile($annee)
      {
         $estMultipleDeQuatreCent = ( ($annee % 400) == 0);
         $estMultipleDeQuatre = ( ($annee % 4) == 0);
         $estPasMultipleDeCent = ( ($annee % 100) != 0);      
         return ( $estMultipleDeQuatreCent || ( $estMultipleDeQuatre &&
        $estPasMultipleDeCent ) );
       }

       $y = date("2021"); 
       if(estAnneeBissextile($y)){
             $message = "<br>".$y." est une année bissextile !<br/>";}
            else { $message = "<br>".$y." n'est pas une année bissextile !<br/>";}
      echo $message;
?>

<hr>
<sub>exo4</sub>
<br>
<?php
function isValid($date, $format = 'Y-m-d'){
      $dt = DateTime::createFromFormat($format, $date);
      return $dt && $dt->format($format) === $date;
    }
 var_dump(isValid('2019-17-32'));
?>

<hr>
<sub>exo5</sub>
<br>
<?php
echo date("h")."h".date("i");
?>

<hr>
<sub>exo6</sub>
<br>
<?php
$oldDate   = "now";
$date1 = date("Y-m-d", strtotime($oldDate.'+ 1 month'));
echo $date1;
?>

<hr>
<sub>exo7</sub>
<?php
$date = date("Y-m-d", 1000200000);

echo "<br><br>" .$date." (Attentats des tours jumelles.)";
?>