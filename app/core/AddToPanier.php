<?php 
    session_start();
    require './Config.php';
    require_once './Panier.php';

    $ID = $_GET['ID'];
    $Query = " SELECT * FROM Product WHERE ID='$ID' ";
    $result = $con->query($Query);
    $row = $result->fetch_assoc(); 
    
    $Panier = new Panier('Products');
    $Product = array(
        'ID'                  => $row['ID'],
        'Image'               => $row['Image'],
        'Product_Name'        => $row['Product_Name'],
        'Product_Description' => $row['Product_Description'],
        'Product_Price'       => $row['Product_Price']
    );

    $Panier->set($ID , $Product);


    header('Location: ../view/panier.php');
?>

