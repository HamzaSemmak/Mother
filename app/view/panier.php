<?php 
    session_start();
    require '../core/Config.php'; 
    require '../core/Panier.php';
    require './layout/card.php';
    $Panier = new Panier('Products');
    $listProducts = $Panier->getPanier();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-commerce </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="../../public/Scss/main.css">
</head>
<body>
    <nav>
        <?php include './layout/navbar.php' ?>
    </nav>


    <main class="page-panier">
        <h1> Panier </h1>
        <div class="Page-panier-content">
            <div class="row">
                <div class="col-8">
                    <?php 
                        if(count($listProducts) > 0) {
                            foreach ($listProducts as $Product) {
                                ?>
                                    <!-- Product -->
                                    <div class="product">
                                        <div class="product-data"> 
                                            <div class="img-pdt">
                                                <img src="./Admin/Uploads/<?php echo $Product['Image']; ?>" alt="">
                                            </div>
                                            <div class="pdt-data">
                                                <a href="#" class="ProductName"> <?php echo $Product['Product_Name'] ?></a>
                                                <br>
                                                <span> <?php echo $Product['Product_Price'] ?> € </span>
                                                <br>
                                                <span> Quantity: Individual Item </span>
                                                <br> <br>
                                                <span class="stock"> En stock </span>
                                            </div>
                                        </div>
                                        <div class="product-quantite">
                                            <!-- <div class="counter">
                                                <button class="conterBtn increase"> <i class="fa-solid fa-plus"></i> </button>
                                                <span id="counter"> 1 </span>
                                                <button class="conterBtn decrease"> <i class="fa-solid fa-minus"></i> </button>
                                            </div> -->
                                            <div class="price">
                                                <input type="number" id="price" value="<?php echo $Product['Product_Price']?>" readonly hidden>
                                                <span id="Result"> <?php echo $Product['Product_Price'] ?> </span>
                                                €
                                            </div>
                                            <div class="close">
                                                <a href="../core/DeleteProductFromPanier.php?ID=<?php echo $Product['ID'] ?>">
                                                    <i class="fa-solid fa-xmark" class="close" id="close_panier"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                <?php
                            }
                        }
                        else {
                            ?>
                                <div class="message">
                                    <div class="alert-danger" style="width: 100%;">
                                        Votre Panier est vide
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                    <div class="retour">
                        <a href="./Home.php">
                            <i class="fa-solid fa-circle-chevron-left"></i> 
                            continuer mes achats 
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="section-1">
                        <?php 
                            $NbrProduct = count($listProducts);
                            $Total = 0;
                            foreach($listProducts as $Product) {
                                $Total = $Total + $Product['Product_Price'];
                            }
                            $Total;
                        ?>
                        <input type="text" id="Total" value="<?php print $Total; ?>" hidden>
                        <div class="ligne">
                            <span> <?php echo $NbrProduct ?> Product </span>
                            <span> <?php echo $Total ?> € </span>
                        </div>
                        <div class="ligne">
                            <span> Livraison </span>
                            <span> Gratuit </span>
                        </div>
                        <hr>
                        <div class="ligne">
                            <span> Total </span>
                            <span class="active-ligne">  <?php echo $Total ?> € </span>
                        </div>
                        <div class="Btn-command-field">
                            <a href="#" class="btn-commande"> commander </a>
                        </div>

                        <div class="message-offre">
                            <?php
                                $Result = 100 - $Total;
                                if ($Result < 0) {
                                    echo "";
                                }
                                else if($Result < 100) {
                                    ?>
                                        <div class="message">
                                            <div class="alert-danger"> If vaut reste <?php echo $Result ?> our gagner un gratuit produit. </div>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="section-2">
                        <div class="ligne">
                            <span class="icon"> <i class="fa-solid fa-lock"></i> </span>
                            <span class="text"> 
                                <h6>Paiement sécurisé</h6>
                                Paiement 100% sécurisé Visa, Mastercard, Paypal
                            </span>
                        </div>

                        <div class="ligne">
                            <span class="icon"> <i class="fa-solid fa-lock"></i> </span>
                            <span class="text"> 
                                <h6> Retour & échange </h6>
                                Vous bénéficiez de 15 jours pour changer d'avis
                            </span>
                        </div>


                        <div class="ligne">
                            <span class="icon"> <i class="fa-solid fa-truck-arrow-right"></i> </span>
                            <span class="text"> 
                                <h6> Livraison gratuite </h6>
                                Livraison gratuite en France Métropolitaine dès 80€ d'achat
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer>
        <?php include './layout/footer.php' ?>
    </footer>
    
    <div> <?php include './layout/popin-offer.php' ?> </div>

    <!----------------------------------->
    <!-- Javascripct Src -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f3c4ed9041.js" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Email Script -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
        emailjs.init("kua19bwPYY_FM1nMM");
        })();
    </script>
    <script>
        const counter = document.querySelector('#counter');
        const btns = document.querySelectorAll('.conterBtn');
        const Result = document.getElementById('Result');
        const price = document.getElementById('price').value ;
        
        let count = 0;
        btns.forEach( (btn) => {
            btn.addEventListener('click', (e) => {
                const styles = e.currentTarget.classList

                if(styles.contains('increase')) {
                    count++;
                }
                else if (styles.contains('decrease')) {
                    if(count == 0) {
                        count = 0;
                    }
                    else {
                        count--;
                    }
                }
                counter.textContent = count
                Result.textContent = count * price
            })
        } )

        const Total = document.getElementById('Total');

        if(Total.value >= 100) {
            setTimeout(9000, offerPoppin.style.display = "block");
        }



        // Ajax Search 
        $(document).ready(function(){
            function fetchData(){
                var s = $("#input").val();
                if (s == '') {
                    $('#output').css('display', 'none');
                }
                $.post("../core/search.php", 
                {
                    s:s
                },
                function(data, status){
                    if (data != "not found") {
                        $('#output').css('display', 'flex');
                        $('#output').html(data);
                    }
                });
            }
            $('#input').on('input', fetchData);
            $("body").on('click', () => {
                $('#output').css('display', 'none');
            });
            $('#input').on('click', fetchData);
        });
    </script>
</body>
</html>