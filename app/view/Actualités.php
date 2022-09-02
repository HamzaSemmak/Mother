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
    <div> <?php include './layout/panier.php' ?> </div>

    <main class="Actualités">
        <div class="content">
            <div class="text">
                <h1> Actualités </h1>
                <p> Revêtement de pulvérisation en céramique CMX ™ Mothers </p>
            </div>

            <div class="text">
                <h4> Protection super hydrophobe et ultra-durable </h4>
                <div class="img-control">
                    <img src="../../public/img/Protection super.jpg" alt="">
                </div>
                <div  class="parag">
                    Vous avez sans doute entendu parler des avantages des revêtements céramiques. Les détaillants, les influenceurs en ligne et les passionnés de voitures sont tous ravis de leur efficacité, mais ces revêtements ont toujours été coûteux et difficiles à appliquer – jusqu’à présent.
                </div>
                <div class="parag">
                    Voici le revêtement céramique en spray Mothers CMX ™ , une formule révolutionnaire qui offre une protection super-hydrophobe et ultra-durable , grâce à son mélange unique de SiO2 (dioxyde de silicium) et TiO2 (dioxyde de titane) . Avec CMX Ceramic Spray Coating, ces technologies sont désormais disponibles avec un produit abordable, convivial et axé sur le consommateur.
                </div>
                <div class="parag">
                    Ce combo révolutionnaire offre une protection ultra longue durée contre les éléments et les perles d’eau, sans sacrifier la véritable clarté optique, la profondeur extrême et cet aspect brillant comme du verre de la céramique. Il est assez polyvalent pour l’ utiliser comme un produit autonome, ou comme un rappel sur votre revêtement céramique existante ou d’ étanchéité . Protéger et prendre soin de votre véhicule n’a jamais été aussi facile.
                </div>
            </div>
        </div>
    </main>

    <footer>
        <?php include './layout/footer.php' ?>
    </footer>
    <!----------------------------------->
    <!-- Javascripct Src -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f3c4ed9041.js" crossorigin="anonymous"></script> 
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