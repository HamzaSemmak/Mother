<?php 
    /*
    *
    *   Get data from DB : 
    *
    */
    function Products($Query) {
        $con = new mysqli('localhost', 'root', '', 'Mothers');
        $sql = $Query;
        if($result = mysqli_query($con, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="card">
                            <div class="card-img">
                                <img src="./Admin/Uploads/<?php echo $row['Image']; ?>" alt="">
                            </div>
                            <div class="card-voir">
                                <a href="./fiche-product.php?ID=<?php echo $row['ID'];?>">
                                    <i class="fa-regular fa-eye"></i> &nbsp;
                                    Voir Plus 
                                </a>
                            </div>
                            <div class="card-text"> 
                                <?php echo $row['Product_Description']; ?>
                            </div>
                            <div class="card-pannier"> 
                                <a href="../core/AddToPanier.php?ID=<?php echo $row['ID'];?>"> AJOUTER AU PANIER </a> 
                            </div>
                            <div class="card-price">
                                <?php echo $row['Product_Price']; ?> €
                            </div>
                        </div>
                    <?php
                }
            }
        }
    }
?>
