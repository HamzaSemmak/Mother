<?php
    require_once '../../core/Config.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MOTHERS </title>
    <link 
        rel="stylesheet" 
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    >
    <link 
        rel="stylesheet" 
        href="../../../public/Scss/main.css"
    >
    <link 
        href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' 
        rel='stylesheet'
    >
</head>
<body id="body-pd" class="dashboard-bd">
    <?php include '../layout/Dashboard.php' ?>

    <main class="Page-add">
        <div class="message">
            <?php
                /*
                *   store : 
                *   Inserting Data into a MySQL Database Table
                */
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
                    $Categorie =  mysqli_real_escape_string($con, $_POST['Categorie']);
            
                    /* 
                    *   Query : Requete 
                    */
                    $Query = "INSERT INTO Product VALUES('','$image','$Product_Name','$Product_Description','$Product_Price','$Categorie')";
                    if(mysqli_query($con, $Query)) {
                        $_SESSION['Add'] = "<div class='alert-success'> Product added succefly  </div>";
                        header("Location: Product.php");
                    }
                    else {
                        ?> <div class='alert-danger'> Oupss something is messing <?php mysqli_connect_error($con) ?> </div> <?php
                    }

                    mysqli_close($con);
                }
            ?>
        </div>
        <div class="section-1">
            <h1> Add new product </h1>
            <div> <i class="fa-solid fa-plus"></i> </div>
        </div>
        <div class="section-2">
            <form class="row" action="" method="POST" enctype="multipart/form-data">
                <div class="col-4">
                    <label for=""> Product Name </label>
                    <input type="text" name="Product_Name" placeholder="Product Name" class="form-control" required>
                </div>

                <div class="col-4">
                    <label for=""> Image </label>
                    <input type="file" name="Image" placeholder="Image" class="form-control" required>
                </div>

                <div class="col-4">
                    <label for=""> Product Price </label>
                    <input type="text" name="Product_Price" placeholder="Product Price" class="form-control" required>
                </div>

                <div class="col-6">
                    <label for=""> Description </label>
                    <textarea name="Product_Description" class="form-control" cols="30" rows="10" required></textarea>
                </div>
                
                <div class="col-4">
                    <label for=""> Product Price </label>
                    <select name="Categorie" class="form-control">
                        <option value="" selected disabled> Categorie : </option>
                        <option value="NOTRE SÉLECTION"> NOTRE SÉLECTION </option>
                        <option value="BEST-SELLERS"> BEST-SELLERS </option>
                        <option value="NOS GAMMES"> NOS GAMMES </option>
                        <option value="NOS PACKS"> NOS PACKS </option>
                        <option value="PRODUITS ASSOCIÉS"> PRODUITS ASSOCIÉS </option>
                    </select>
                </div>

                <div class="col-12">
                    <button name="save"> <i class="fa-regular fa-floppy-disk"></i> &nbsp; Save </button>
                </div>
            </form>
        </div>
    </main>


    <!----------------------------------->
    <!-- Javascripct Src -->
    <script src="https://kit.fontawesome.com/f3c4ed9041.js" crossorigin="anonymous"></script>
</body>
</html>


