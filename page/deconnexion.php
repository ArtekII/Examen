<?php 
    session_start();
    unset($_SESSION['id_membre']);
    header('Location:index.php');
?>