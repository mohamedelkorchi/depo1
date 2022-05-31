<?php

// $exo = file("exo.txt");
// foreach($exo as $exo)
// {
// echo $exo."<br>";
// //echo "<a href=\"$exo\" title=\"\">$resultat</a>";
// } 



$fp = fopen("exo.txt", "r");
while(!feof($fp))
{
    // Lecture de la ligne du document , 4096 est le nombre de caractére
    $ligne = fgets($fp, 4096);
    echo "<a href=\"$ligne => $fp\"title=\"\"> $ligne</a>".'<br>';
} ?>

<br>
<hr>
<br>

<?php

// $customers = file("customers.csv");
// foreach($customers as $customers)
// {
//    // echo $customers."<br>";
//     print_r(explode(",",$customers."<br>"));
    
// }


$test = 'customers.csv';
   $ligne = file($test);
  ?>

        <table> 
            <thead>
                <tr>
                    <th> Surname </th>
                    <th> Firstname </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> City </th>
                    <th> State </th>
                </tr>
            </thead>
        <tbody>

           <?php 

           foreach ($ligne as $lignetableau):
            // echo $lignetableau;
             $test1 = explode(",", $lignetableau);
  
            ?>

                <tr>
            <?php foreach ($test1 as $colonne) {?>

                    <td><?= $colonne ?>&nbsp;</td>

                    <!-- LE nbsp; SERT A CREER UN ESPACE POUR ESPACER LA COLONNE CITY ET PHONE -->
                
                <?php } ?>                       
            </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
?>