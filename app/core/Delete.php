<?php
    require_once './Config.php';

    $ID = $_GET['ID'];
    
    $Delete = "DELETE FROM Product WHERE ID='$ID'";
    if(mysqli_query($con,$Delete)) {
        echo "<script> window.location.href='../view/Admin/Product.php'; </script>";
    }
    else {
        echo "<div class='message'>";
        echo "<div class='alert-danger'> Error : could not Delete -> " . mysqli_error($con) . "div>";
        echo "</div>";
    }
    mysqli_close($con);
?>