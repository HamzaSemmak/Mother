<?php 
    session_start();
    require_once '../core/Config.php'; 
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
    <nav> <?php include './layout/navbar.php' ?></nav>
    <header>
        <div class="cataloque-header">
            <div class="content">
                <div>
                    <h1> California Gold </h1>
                    <p>
                        À partir de la formule California Gold Cleaner & Wax développée aux humbles débuts de Mothers®, la gamme California Gold complète comprend désormais plusieurs produits spécialement conçus pour les soins haut de gamme. Certains des produits les plus populaires incluent nos cires riches en utilisant seulement la meilleure qualité de cire de Carnauba, le detailer instantané, et notre barre d’argile célèbre.
                    </p>
                </div>
            </div>
        </div>
    </header>
    <div> <?php include './layout/panier.php' ?> </div>
    <main class="catalogue-main">
        <div class="content">
            <div class="section-one">
                <div>
                    <span id="Open_filtrer"> <i class="fa-solid fa-bars-staggered"></i> Fitrer </span>
                    <div class="text-none"> Accueil / Gammes / California Gold </div>
                </div>
                <div>
                    <div class="text-none"> Afficher 1-16/19 résultats </div>
                    <span> Tier par <i class="fa-solid fa-angle-down"></i></span>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="product">
                <?php Products("SELECT * FROM Product") ?>
            </div>
            <!-- <div class="btn-product">
                <a href="#"> Afficher plus de produits </a>
            </div> -->
        </div>
    </main>
    <div> <?php include './layout/Filtrer.php' ?> </div>
    <footer> <?php include './layout/footer.php' ?> </footer>

    <!----------------------------------->
    <!-- Javascripct Src -->
    <script src="https://kit.fontawesome.com/f3c4ed9041.js" crossorigin="anonymous"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
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