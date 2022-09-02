<div class="panier" id="panier">
   <div class="section-3">
        <i class="fa-solid fa-xmark" class="close" id="close_panier"></i>
    </div>
    <div class="section-1">
        <?php
            if(!$listProducts) {
                ?>
                    <div class="message" style="width: 99%;">
                        <div class="alert-danger">
                            Votre Panier est vide
                        </div>
                    </div>
                <?php
            }
            else {
                foreach ($listProducts as $Product) {
                    ?>
                        <div class="Product">
                            <div class="Product-img">
                                <img src="./Admin/Uploads/<?php print $Product['Image'] ?>" alt="">
                            </div>
                            <div class="Product-description">
                                <div> <?php print $Product['Product_Name'] ?> </div>  
                                <div> <?php print $Product['Product_Price'] ?> € </div>
                                <div>
                                    <a onclick="alert('Acheter')"> 
                                        Acheter &nbsp;
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="action">
                                <a href="../core/DeleteProductFromPanier.php?ID=<?php print $Product['ID'] ?>"> <i class="fa-solid fa-trash-can"></i> </a>
                                <a href="fiche-product.php?ID=<?php print $Product['ID'] ?>"> <i class="fa-solid fa-eye"></i> </a>
                            </div>
                        </div>
                    <?php
                }
            }
        ?>
    </div>
</div>

<script>
    const open_panier = document.getElementById('open_panier');
    const panier = document.getElementById('panier');
    const close_panier = document.getElementById('close_panier');
    open_panier.addEventListener('click', () => {
        panier.style.display = "block";
    });
    close_panier.addEventListener('click', () => {
        panier.style.display = "none";
    });
</script>






<!-- 
    Paypel api 
    Sysytem confideliter pour panier
 -->