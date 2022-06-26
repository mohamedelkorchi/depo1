<?php
    sesssion_start();
    session_destroy();
    header('Location:connexion.php');
?>