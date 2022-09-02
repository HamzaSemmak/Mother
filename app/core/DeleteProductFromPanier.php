<?php
    session_start();
    require './Panier.php';
    $Panier = new Panier('Products');
    $listProducts = $Panier->delete($_GET['ID']);

    header('Location: ../view/panier.php');
?>