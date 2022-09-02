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
    <?php require_once '../layout/Dashboard.php' ?>

    <main class="Page-Product">
        <div class="section-1">
            <h1> Product List </h1>
            <div> <i class="fa-solid fa-cart-shopping"></i> </div>
        </div>
        <div class="message">
            <?php 
                if(isset($_SESSION['Add'])) {
                    echo $_SESSION['Add'];
                    unset($_SESSION['Add']);
                }
                else if(isset($_SESSION['Edit'])) {
                    echo $_SESSION['Edit'];
                    unset($_SESSION['Edit']);
                }
            ?>
        </div>
        <div class="section-2">
            <table class="table">
                <thead>
                    <tr>
                        <th> Image </th>
                        <th> Product Name </th>
                        <th> Product Description </th>
                        <th> Product Price </th>
                        <th> Categorie </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        /*
                        *
                        *   Get data from DB : 
                        *
                        */
                        $sql = "SELECT * FROM Product";
                        if($result = mysqli_query($con, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo '<td> <img src="./Uploads/' . $row['Image'] .'"/> </td>';
                                    echo "<td>" . $row['Product_Name'] . " </td>"; 
                                    echo "<td>" . $row['Product_Description'] . " </td>"; 
                                    echo "<td>" . $row['Product_Price'] . " €</td>"; 
                                    echo "<td>" . $row['Categorie'] . " </td>"; 
                                    echo "<td class='active-th'>";
                                    echo "<a href='../../core/Delete.php?ID=" . $row['ID'] . "' class='bg-danger' > Delete </a>";
                                    echo "<a href='edit.php?ID=" . $row['ID'] . "' class='bg-success'> Edit </a>";
                                    echo "</td>"; 
                                    echo "</tr>";
                                }
                            }
                        }
                        mysqli_close($con);
                    ?>
                </tbody>
            </table>
        </div>
    </main>


    <!----------------------------------->
    <!-- Javascripct Src -->
    <script src="https://kit.fontawesome.com/f3c4ed9041.js" crossorigin="anonymous"></script>
</body>
</html>


