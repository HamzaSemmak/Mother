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
    <header>
        <div class="cataloque-header">
            <div class="content">
                <div>
                    <h1> Detail Guide </h1>
                    <p>
                        Cleaning and preening is what the Mothers® Detail Guide is all about. From the simplest tasks to the most technically challenging, our Guide covers it all.
                    </p>
                </div>
            </div>
        </div>
    </header>
    <main class="DetailGuide">
        <div class="content">
            <div class="Block-text">
                <h1> Comment laver sa voiture </h1>
                <div class="txt">
                    Comment laver sa voiture, cirer votre camion, faire briller le chrome et polir sa peinture. Installez-vous tranquillement pour nettoyer vos roues tandis que Back-to-Black® Tire Shine fonctionne comme par magie. Reposez-vous et examinez le travail que vous avez accompli; Cherchez les petites choses que vous avez manquées. Le temps passé à nettoyer votre voiture est un investissement dans sa santé et sa beauté – tirant parti de l’huile de coude et de l’effort minutieux afin que les gens puissent admirer votre véhicule autant que vous. Les gens de Mothers® ressentent la même chose.
                </div>
                <div class="txt">
                    Mothers® a travaillé pendant plusieurs décennies dans le secteur de la carrosserie pour vous aider à garder votre véhicule au mieux, et c’est ce que nous faisons. Dans ce guide détaillé, vous trouverez une collection de conseils et d’astuces utiles, préparés par nos chimistes, pour votre plaisir. Nous avons également identifié les outils et les matériaux de soins de voiture dont vous avez besoin pour réussir et vous disposez d’un calendrier pour vous aider à comprendre quand faire et ce qu’il faut faire.
                </div>
                <div class="txt">
                    Afin d’obtenir les meilleurs résultats possibles, nous vous suggérons de passer par ce guide pour apprendre en détail comment laver votre voiture. Peut-être que vous trouverez une nouvelle astuce, ou découvrez qu’une technique que vous avez utilisée par le passé n’était pas une bonne idée. Si vous êtes l’un de ces personnes pressées, utilisez ce manuel comme référence rapide pour des informations importantes. Gardez à l’esprit qu’il y a une grande différence entre le détailing de votre voiture et le lavage rapide – nous vous aiderons à faire les deux.
                </div>
                <hr>
                <h1> Les différentes étapes du nettoyage voiture </h1>
                <div class="txt">
                    Allons-y: planifiez vos efforts pour avoir une idée précise de comment laver votre voiture. Évaluez l’état de votre véhicule: pneus, roues, peinture, garnitures et intérieur (, tapis, tissus et tableau de bord). De là, vous pouvez déterminer ce dont vous aurez besoin pour les matériaux, les outils et la durée de nettoyage. Vous devrez également choisir un bon emplacement pour faire votre travail, de préférence pas au soleil. En plus du besoin évident d’eau et d’électricité, il faudra vous assurer que vous avez la possibilité d’opérer sans dommages pour vos fleurs !(le nettoyeur chrome fait des merveilles pour vos roues, mais vous ne voulez certainement pas l’obtenir pour vos roses).
                </div>
                <br>
                <div class="txt">
                    Après avoir évalué les besoins de votre véhicule, vous vous sentirez peut-être un peu débordé: un travail de détailing complet peut impliquer de nombreuses étapes et de nombreux petits processus. Laissez ce guide vous aider.
                </div>
                <ul class="txt">
                    <li> Pour rendre les choses plus faciles, décomposez le processus en tâches plus petites à effectuer dans l’ordre. </li>
                    <li> Utilisez les planificateurs de nettoyage et de détail étape par étape ci-dessous. </li>
                    <li> D’une manière générale, il vaut mieux travailler de l’intérieur et du haut en bas. </li>
                    <li> Exceptions à la règle haut/bas – commencez d’abord par les jantes et les pneus, et si vous prévoyez la réparation des rayures ou l’enlèvement des taches, faites-le avant le polissage et la cire </li>
                    <li> Combien de fois vous pouvez laver et / ou détailler votre véhicule est un autre facteur important à considérer. Que vous ayez du temps libre ou pas, vous déterminerez souvent si le détailing peut être une affaire hebdomadaire ou mensuelle – planifiez, planifiez, planifiez.</li>
                    <li>Déterminez les événements hebdomadaires que vous pouvez passer en mensuelle lorsque le temps ne permet pas une attention plus fréquente.</li>
                </ul>
            </div>
            <div class="txt-active">
                <a href="./catalogue.php"> 
                    Voir Tout Les Produits
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
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