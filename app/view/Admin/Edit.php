<?php
    include '../../core/Config.php';
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
                *   Edit  : 
                *   Update Data into a MySQL Database Table
                */
                function Return_Data(int $N) {
                    include '../../core/Config.php';
                    $ID = $_GET['ID'];
                    $cmd = " SELECT * FROM Product WHERE ID='$ID' ";
                    $result = mysqli_query($con, $cmd);
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            return $row[$N];
                        }
                    }
                }
                    
                if(isset($_POST['Edit'])) {
                    $ID = $_GET['ID'];
                    $Product_Name =  $_POST['Product_Name'];
                    $Product_Price = $_POST['Product_Price'];
                    $Product_Description = $_POST['Product_Description'];
                    $Query = "UPDATE Product SET Product_Name='$Product_Name', Product_Price='$Product_Price', Product_Description='$Product_Description' WHERE ID='$ID'";
                    if(mysqli_query($con , $Query)) {
                        $_SESSION['Edit'] = "<div class='alert-success'> Product Updated succefly  </div>";
                        header("Location: Product.php");
                    }
                    else {
                        echo "<p class='alert-danger'> ERROR: Could not able to Update " . mysqli_error($con) . " </p>";
                    }
                    mysqli_close($con);
                }
            ?>
        </div>
        <div class="section-1">
            <h1> Edit product </h1>
            <div>  </div>
        </div>
        <div class="section-2">
            <form class="row" action="" method="POST" enctype="multipart/form-data">
                <div class="col-4">
                    <label for=""> Product Name </label>
                    <input type="text" value="<?php echo Return_Data(2); ?>" name="Product_Name" placeholder="Product Name" class="form-control" required>
                </div>

                <div class="col-4">
                    <label for=""> Image </label>
                    <input type="file" value="<?php echo Return_Data(1); ?>" name="Image" placeholder="Image" class="form-control">
                </div>

                <div class="col-4">
                    <label for=""> Product Price </label>
                    <input type="text" name="Product_Price" value="<?php echo Return_Data(4); ?>" placeholder="Product Price" class="form-control" required>
                </div>

                <div class="col-6">
                    <label for=""> Description </label>
                    <textarea name="Product_Description" class="form-control" cols="30" rows="10" required> <?php echo Return_Data(3); ?>
                    </textarea>
                </div>

                <div class="col-4">
                    <label for=""> Product Price </label>
                    <select name="Categorie" class="form-control">
                        <option value="<?php echo Return_Data(5); ?>" selected disabled> <?php echo Return_Data(5); ?> </option>
                        <option value="NOTRE SÉLECTION"> NOTRE SÉLECTION </option>
                        <option value="BEST-SELLERS"> BEST-SELLERS </option>
                        <option value="NOS GAMMES"> NOS GAMMES </option>
                        <option value="NOS PACKS"> NOS PACKS </option>
                        <option value="PRODUITS ASSOCIÉS"> PRODUITS ASSOCIÉS </option>
                    </select>
                </div>

                <div class="col-12">
                    <button name="Edit"> <i class="fa-regular fa-floppy-disk"></i> &nbsp; Edit </button>
                </div>
            </form>
        </div>
    </main>


    <!----------------------------------->
    <!-- Javascripct Src -->
    <script src="https://kit.fontawesome.com/f3c4ed9041.js" crossorigin="anonymous"></script>
</body>
</html>


