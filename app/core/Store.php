<?php 
    /*
    *   store : 
    *   Inserting Data into a MySQL Database Table
    */
    function store() {
        require_once 'Config.php';
        if(isset($_POST['save'])) {
            /* 
            *   Atribute  : 
            */
            $target_dir = "Uploads/";
            $target_file = $target_dir . basename($_FILES["Image"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
                 ?> <div class='alert-success'> The Image has been uploaded. </div> <?php
            } else {
                ?> <div class='alert-danger'> Sorry, there was an error uploading your file. </div> <?php
            }
            $image=basename( $_FILES["Image"]["name"],".jpg");
    
            $Product_Name = mysqli_real_escape_string($con, $_POST['Product_Name']);
            $Product_Price = mysqli_real_escape_string($con, $_POST['Product_Price']);
            $Product_Description = mysqli_real_escape_string($con, $_POST['Product_Description']);
    
            /* 
            *   Query : Requete 
            */
            $Query = "INSERT INTO Product VALUES('','$image','$Product_Name','$Product_Description','$Product_Price')";
            if(mysqli_query($con, $Query)) {
                ?> <div class='alert-success'> Product added succefly  </div> <?php
            }
            else {
                ?> <div class='alert-success'>Oupss something is messing <?php mysqli_connect_error($con) ?> </div> <?php
            }

            mysqli_close($con);
        }
    }

    
?>