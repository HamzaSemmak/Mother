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

    <main class="PointsDeVente">
        <div class="content">
            <div class="text">
                <h1> DÉCOUVRIR NOTRE HISTOIRE </h1>
            </div>
            <div class="text row">
                <div class="col-6"> 
                    <p>
                        Cela a commencé il y a presque 50 ans avec une petite boîte de polish. L’étiquette était une simple
                        carte de visite attachée à un petit récipient en métal avec un élastique. Et, bien que l’emballage 
                        ait semblé un peu simple, l’intérieur était un composé très spécial.
                    </p>
                    <p>
                        Au début des années 70, Al Holloway – le propriétaire de la chaîne de magasins Tire City,
                        située dans le sud de la Californie – s’est rendu compte qu’il avait besoin d’un moyen 
                        de faire briller les nouvelles jantes en aluminium. Après une expérimentation minutieuse 
                        par un chimiste qu’il connaissait, ils arrivèrent à la bonne formule. Al et son partenaire,
                        Jack Hampton, se sont rencontrés dans un café pour parler du nouveau polish Mag & Aluminium.
                        Ils ont tous deux proposé un nom de marque qu’ils ont écrit sur une serviette en papier : 
                        Mothers. Pourquoi le nom de Mothers ? “C’est la question que l’on nous pose le plus !”, déclare
                        Dennis Holloway, le fils du fondateur d’Al Holloway, qui dirige maintenant la société. 
                        “C’est une évidence – tout le monde devrait faire confiance à sa mère, n’est-ce pas ?” 
                        fait-il remarquer.
                    </p>
                </div>
                <p class="col-6">
                    À partir de là, ils ont commencé à assister à des salons automobile pour démontrer l’efficacité du produit.
                    En dépit de son étiquette sans prétention, et de son nom inhabituel le succès s’est vite emballé. 
                    La petite boîte de conserve avec une carte de visite comme étiquette a commencé à attirer un public 
                    fidèle d’amoureux de la voiture qui souhaitaient conserver cet éclat «comme neuf» pour leurs jantes
                    et leurs pièces en aluminium . Comme avec tant de nouveaux produits adoptés par les passionnés d’automobiles,
                    tous les pilotes de voitures “au courant” ont vite pris l’habitude d’utiliser Mothers Mag & Aluminum Polish
                    sur leurs jantes.
                </p>
            </div>

            <div class="text">
                <h1> Quelque soit le besoin en produits de nettoyage pour votre voiture, MOTHERS® a la réponse </h1>
                <div class="row">
                    <div class="col-6">
                        <img src="../../public/img/HISTOIRE 1.jpg" alt="">
                        <h4 class="little-title"> – PROMESSE DE MOTHERS – </h4>
                        <p>
                            Aujourd’hui, après des années d’essais et d’expérimentation approfondis, la gamme Mothers est passée de cet élément unique à une gamme complète de plus de 70 produits d’entretien de la voiture
                        </p>
                    </div>
                    <div class="col-6">
                        <img src="../../public/img/HISTOIRE 2.jpg" alt="">
                    </div>
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