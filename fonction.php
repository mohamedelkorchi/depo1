<?php
$texte = ucfirst("Bonjour le monde");
echo $texte;
?>

<br>
<hr>
<br>

<!-- <?php
function ok() 
{
    echo "Bonjour";
}   
ok();
?> -->

<br>
<hr>
<br>

<!-- <?php
function bonjour($prenom) 
{
    echo "Bonjour ".$prenom;
}
bonjour("dave");
?> -->

<br>
<hr>
<br>

<!-- <?php
function presentation($prenom, $nom)
{
   echo "Bonjour ".$prenom." ".$nom;
}
presentation ("dave","loper");
?> -->

<br>
<hr>
<br>

<?php
$a = $b = 2;

// function somme() { 
// //global $a, $b;
// $a = $b = 5;
//    $c = $a + $b; 
//    echo $c; 
// } 

// somme(); 
?>

<br>
<hr>
<br>

<!-- <?php
function Test() { 
    $a=0; 
    echo $a."<br>"; 
    $a++; 
 } 
 
 // Appel de la fonction (2 fois)
 Test(); 
 Test(); 
?> -->

<br>
<hr>
<br>

<!-- <?php
function Test1 () 
{ 
   static $a=0; 
   echo "$a<br />"; 
   $a++;
} 

// Appel de la fonction (3 fois)
Test1(); 
Test1(); 
Test1(); 
Test1();
Test1();
Test1();
?> -->

<br>
<hr>
<br>

<sub>Exo 1</sub><br>
<?php
function lien($lien,$titre){
    echo"<a href=$lien>$titre</a>";
}

lien("https://www.reddit.com/", "Reddit Hug");
?>

<br>
<hr>
<br>

<sub>Exo 2</sub><br>
<?php
function somme($sum){
    // $sum = array_sum($result);
    // return $sum;

    return array_sum($sum);
}
 
$tab = array(4, 3, 8, 2);
 $resultat = somme($tab);
 
 
 
echo $resultat;
?>

<br>
<hr>
<br>

<sub>Exo 3</sub><br>

<?php
$mdp = "Amiens80";
function motdepasse($mdp){
   $code = preg_match("/^(?=.*[0-9])(?=.*[A-Z]).{8,20}$/",$mdp);

if ($code ){
    echo "true";
}else {
    echo "false";
}
}
motdepasse ($mdp); 
?>