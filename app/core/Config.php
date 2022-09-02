<?php 
    /*
    *
    *   Class Config : 
    *   Connecting to MySQL Database Server
    *
    */
    
    $con = new mysqli('localhost', 'root', '', 'Mothers');
    
    if($con === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>