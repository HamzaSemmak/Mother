<?php 
    session_start();
    require_once '../core/Config.php'; 
    require '../core/Panier.php';
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
    <nav> <?php include './layout/navbar.php'; ?></nav>
    <div> <?php include './layout/panier.php' ?> </div>
    <div class="fiche-product-header">
        <div class="fiche-header">
            <div class="row">
                <div class="col-7"> 
                    <div class="section-1"> 
                        <a href="#" class="shape"> <i class="fa-brands fa-facebook-f"></i> </a>
                        <a href="#" class="shape"> <i class="fa-brands fa-instagram"></i> </a>
                    </div>
                    <?php 
                        function Product(int $N) {
                            include '../core/Config.php';
                            $ID = $_GET['ID'];
                            $cmd = " SELECT * FROM Product WHERE ID='$ID' ";
                            $result = mysqli_query($con, $cmd);
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_array($result)) {
                                    return $row[$N];
                                }
                            }
                        }
                    ?>
                    <div class="section-2"> 
                        <div class="img first">
                            <img src="./Admin/Uploads/<?php echo Product(1); ?>" alt="" onclick="slide.src = this.src"> 
                        </div>
                        <div class="img second">
                            <img src="./Admin/Uploads/<?php echo Product(1) ?>" alt="" onclick="slide.src = this.src"> 
                        </div>
                        <div class="img tree">
                            <img src="./Admin/Uploads/<?php echo Product(1) ?>" alt="" onclick="slide.src = this.src"> 
                        </div>
                    </div>
                    <div class="section-3">
                        <img src="./Admin/Uploads/<?php echo Product(1) ?>" width="auto" height="auto" alt=""name="slide"> 
                    </div>
                </div>
                <div class="col-4"> 
                    <div class="section-1">
                        <h6> Accueil / Gammes / California Gold </h6>
                        <div> <img src="../../public/img/star.png" alt=""></div>
                    </div>
                    <div class="section-2">
                        <h1> <?php echo Product(2) ?> </h1>
                        <p class="price"> <?php echo Product(4); ?> € </p>
                        <p class="text">
                            <?php echo Product(3); ?>
                        </p>
                    </div>
                    <div class="section-3">
                        <h1> <?php echo Product(0) ?> </h1>
                        <a href="../core/AddToPanier.php?ID=<?php echo Product(0); ?>"> AJOUTER AU PANIER </a>
                    </div>
                    <div class="section-4">
                        <a href="#"> Catégorie : &nbsp;&nbsp; California Gold </a>
                    </div>
                </div>
                <!-- <div class="col-1">
                    <a href="#" class="shape"> <i class="fa-solid fa-angle-left"></i> </a>
                    <a href="#" class="shape"> <i class="fa-solid fa-angle-right"></i> </a>
                </div> -->
            </div>
            <div class="section-avis"> 
                <a href="#"> Description </a>
                <a href="#"> nstruction d’utilisation </a>
                <a href="#"> Avis (5) </a>
            </div>
        </div>
    </div>

    <main class="fiche-product">
        <div class="section-1">
            <div class="content row">
                <div class="col-6">
                    <p>
                        Mothers® California Gold cire pure brazilian carnauba est la touche finale à notre Ultimate Wax System®. Elle offre une brillance profonde et une protection durable pour toutes les peintures et vernis transparents. Alors que les étapes 1 et 2 nettoient et lissent la surface de votre peinture pour la plus grande réflectivité, cette dernière étape de notre processus améliore et préserve la finition de votre véhicule. Elle offre la richesse et la profondeur que vous méritez.
                    </p>
                    <p>
                        Retrouvez nos conseils d’utilisation du California Gold cire pure brazilian carnauba dans notre guide de nettoyage voiture :
                        <br> <br>
                        <span> Voir le guide de préparation peinture polish </span>
                        <br> <br>
                        <span> Voir le guide cire voiture </span>
                        <br> <br>
                        <a href="#"> Télécharger la fiche alerte sécurité</a>
                    </p>
                </div>
                <div class="col-6"> </div>
            </div>
        </div>

        <div class="section-2">
            <div class="content">
                <div class="text">
                    <h1> Produits associés </h1>
                </div>
                <div class="product row">
                    <div class="col-6">
                        <?php include './layout/card.php' ?>
                        <?php Products("SELECT * FROM Product WHERE Categorie LIKE 'PRODUITS ASSOCIÉS' LIMIT 2") ?>  
                    </div>
                    <div class="col-6">
                        <?php Products("SELECT * FROM Product WHERE Categorie LIKE 'PRODUITS ASSOCIÉS' LIMIT 2 OFFSET 2") ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

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