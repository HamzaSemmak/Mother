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
    <header>
        <?php include './layout/header.php' ?>
    </header>
    <div> <?php include './layout/panier.php' ?> </div>
    <main class="home">
        <!-------------->
        <div class="content">
            <div class="text">
                <h1> Notre sélection </h1>
                <p>
                    Il n’y a pas de brillance comme Mothers
                </p>
            </div>
            <div class="product row">
                <div class="col-6">
                    <?php Products("SELECT * FROM Product WHERE Categorie LIKE 'NOTRE SÉLECTION' LIMIT 2") ?>
                </div>
                <div class="col-6">
                    <?php Products("SELECT * FROM Product WHERE Categorie LIKE 'NOTRE SÉLECTION' LIMIT 2 OFFSET 2") ?>
                </div>
            </div>
        </div>
        <!-------------->
        <div class="content">
            <div class="text">
                <h1> Zone d’application </h1>
                <p>
                    MOTHERS® vous aide à trouver le produit adapté par zone d’appli
                </p>
            </div>
            <div class="Zone-app row">
                <div class="col-6 Carosserie">
                    <span class="text"> Carosserie </span>
                </div>
                <div class="col-6 row">
                    <div class="col-6 Pneus"> 
                        <div class="text"> Pneus </div>
                    </div>
                    <div class="col-6 Intérieur"> 
                        <div class="text"> Intérieur </div>
                    </div>
                    <div class="col-12 Phares">
                        <div class="text"> Phares </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-------------->
        <div class="marque">
            <div class="marque-content">
                <div class="row">
                    <div class="col-7"></div>
                    <div class="col-5"> 
                        <div>
                            <h1> La marque MOTHERS® </h1>
                            <p>
                                Très respecté et admiré dans l'industrie des soins de voiture et du détailing aux USA, Mothers a connu beaucoup de succès au cours des années pour ses performances supérieures et ses résultats fantastiques. Notre histoire Mothers® a commencé il y a plus de 30 ans avec une petite boîte de polish. L'étiquette était une carte d'affaires simple attachée autour d'un petit récipient en métal avec une bande de caoutchouc. Aujourd'hui, après des années d'essais et d'expérimentations approfondies, la ligne Mothers® est passée de cet élément unique à une gamme complète de plus de 40 produits de soins automobiles différents.
                            </p>
                            <a href="./Notre Histoire.php"> Découvrir notre histoire </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------------->
        <div class="content">
            <div class="text">
                <h1> Best-sellers </h1>
                <p>
                    Les incontournables pour l’entretien de votre voiture
                </p>
            </div>
            <div class="product row">
                <div class="col-6">
                    <?php Products("SELECT * FROM Product WHERE Categorie LIKE 'BEST-SELLERS' LIMIT 2") ?>
                </div>

                <div class="col-6">
                    <?php Products("SELECT * FROM Product WHERE Categorie LIKE 'BEST-SELLERS' LIMIT 2 OFFSET 2") ?>
                </div>
            </div>
            <div class="text">
                <a href="catalogue.php" class="btn"> Découvrir tous les best-sellers </a>
            </div>
        </div>
        <!-------------->
        <div class="content">
            <div class="text">
                <h1> Nos gammes </h1>
                <p>
                    Des gammes complètes pour répondre à tous vos besoins MOTHERS® vous aide à trouver le produit adapté par zone d’appli
                </p>
            </div>
            <div class="Zone-app row">
                <div class="col-6 Mothers-Classic">
                    <span class="text"> Mothers-Classic </span>
                </div>
                <div class="col-6 row">
                    <div class="col-12 California-Gold">
                        <div class="text"> California Gold </div> 
                    </div>
                    <div class="col-6 Power"> 
                        <div class="text"> Power </div>
                    </div>
                    <div class="col-6 Speed"> 
                        <div class="text"> Speed </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------------->
        <div class="content">
            <div class="text">
                <h1> Nos packs </h1>
                <p>
                    Un objectif : un pack produit
                </p>
            </div>
            <div class="product row">
            <div class="col-6">
                    <?php Products("SELECT * FROM Product WHERE Categorie LIKE 'Nos packs' LIMIT 2") ?>
                </div>

                <div class="col-6">
                    <?php Products("SELECT * FROM Product WHERE Categorie LIKE 'Nos packs' LIMIT 2 OFFSET 2") ?>
                </div>
            </div>
            <div class="text">
                <a href="catalogue.php" class="btn"> Découvrir tous les packs</a>
            </div>
        </div>
        <!-------------->
        <div class="content">
            <div class="text">
                <h1> Nos conseils d’experts </h1>
                <p>
                    pour entretenir votre voiture
                </p>
            </div>
            <div class="conseille-card">
                <div class="card">
                    <div class="card-img">
                        <img src="../../public/img/conseille-card-1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h4> Comment laver sa voiture </h4>
                        <p> 
                            Comment laver sa voiture, cirer votre camion, faire briller le chrome et polir sa peinture. Installez-vous tranquillement pour nettoyer vos roues tandis que Back-to-Black® Tire Shine fonctionne comme par […]
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="./DetailGuide.php"> <i class="fa-solid fa-minus"></i> &nbsp; Lire la suite </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="../../public/img/conseille-card-2.png" alt="">
                    </div>
                    <div class="card-text">
                        <h4> Introduction au nettoyage jantes voiture </h4>
                        <p> 
                            Vous pouvez essayer le nettoyage jantes en lavant en même temps que le reste de votre voiture (haut en bas signifie les faire durer). Cela vous donnera une base de référence - le shampoing voiture peut être suffisant […]
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="./DetailGuide.php"> <i class="fa-solid fa-minus"></i> &nbsp; Lire la suite </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="../../public/img/conseille-card-3.png" alt="">
                    </div>
                    <div class="card-text">
                        <h4> Retirer les contaminants pour se préparer à la cire </h4>
                        <p> 
                            Pourquoi voulez-vous utiliser de l'argile automobile ? Parce qu'il
                            est particulièrement capable d'éliminer les minuscules contaminants
                            qui détruisent les finitions automobiles fines au niveau 
                            microscopique.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="./NosConseils.php"> <i class="fa-solid fa-minus"></i> &nbsp; Lire la suite </a>
                    </div>
                </div>
            </div>
            <br> <br>
            <div class="text">
                <a href="./NosConseils.php" class="btn"> Découvrir tous Nos conseils d’experts </a>
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