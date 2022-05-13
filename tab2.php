<table border="1">
    <th>
        <?php for($i=0;$i<=8;$i++){?>
    <td><strong> <?= $i ?> </strong></td>
    <?php }?>
    </th>
    <tr>
        <td><strong>0</strong></td>
        <?php for($i=0;$i<=8;$i++)
    {?>
        <td> <?= $i*0 ?></td>
        <?php }?>
    </tr>
    <tr>
        <td><strong>1</strong></td>
        <?php for($i=0;$i<=8;$i++)
    {?>
        <td> <?= $i*1 ?></td>
        <?php }?>
    </tr>
    <tr>
        <td><strong>2</strong></td>
        <?php for($i=0;$i<=8;$i++)
    {?>
        <td> <?= $i*2 ?></td>
        <?php }?>
    </tr>
    <tr>
        <td><strong>3</strong></td>
        <?php for($i=0;$i<=8;$i++)
    {?>
        <td> <?= $i*3 ?></td>
        <?php }?>
    </tr>
    <tr>
        <td><strong>4</strong></td>
        <?php for($i=0;$i<=8;$i++)
    {?>
        <td> <?= $i*4 ?></td>
        <?php }?>
    </tr>
    <tr>
        <td><strong>5</strong></td>
        <?php for($i=0;$i<=8;$i++)
    {?>
        <td> <?= $i*5 ?></td>
        <?php }?>
    </tr>
    <tr>
        <td><strong>6</strong></td>
        <?php for($i=0;$i<=8;$i++)
    {?>
        <td> <?= $i*6 ?></td>
        <?php }?>
    </tr>
    <tr>
        <td><strong>7</strong></td>
        <?php for($i=0;$i<=8;$i++)
    {?>
        <td> <?= $i*7 ?></td>
        <?php }?>
    </tr>
    <tr>
        <td><strong>8</strong></td>
        <?php for($i=0;$i<=8;$i++)
    {?>
        <td> <?= $i*8 ?></td>
        <?php }?>
    </tr>
    <!--
<tr>
    <td><strong>9</strong></td>
    <?php for($i=0;$i<=12;$i++)
    {?>
        <td> <?= $i*9 ?></td>
    <?php }?>
</tr>
<tr>
    <td><strong>10</strong></td>
    <?php for($i=0;$i<=12;$i++)
    {?>
        <td> <?= $i*10 ?></td>
    <?php }?>
</tr>
<tr>
    <td><strong>11</strong></td>
    <?php for($i=0;$i<=12;$i++)
    {?>
        <td> <?= $i*11 ?></td>
    <?php }?>
</tr>
<tr>
    <td><strong>12</strong></td>
    <?php for($i=0;$i<=12;$i++)
    {?>
        <td> <?= $i*12 ?></td>
    <?php }?>
</tr>
    -->
</table>
<br>
<br>
<hr>


<?php 
for($a = 0; $a<150; $a++)
{                                                        
    $result = $a % 2;                                
    if($result == 1)
    {                                                 
       echo $a." ";
    }
}    
?>