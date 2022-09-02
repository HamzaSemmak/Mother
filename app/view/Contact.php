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
    <main class="contact">
        <div class="row">
            <div class="col-6">
                <img src="../../public/img/contact.png" alt="">
            </div>
            <div class="col-6">
                <h5> Contactez-nous </h5>
                <p class="text">
                    Remplissez le formulaire ci-dessous avec vos coordonnées et envoyez nous votre message. Nous vous répondrons dans les plus brefs délais.
                </p>
                <form>
                    <input type="text" class="form-control name" placeholder="Entrer Votre Nom">
                    <input type="email" class="form-control email" placeholder="Entrer Votre Email">
                    <textarea class="form-control message" placeholder="Entrer Votre Message" cols="30" rows="10"></textarea>
                    <button class="send-btn"> Envoyer </button>
                </form>
            </div>
        </div>
    </main>

    <!----------------------------------->
    <!-- Javascripct Src -->
    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Email Script -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
        emailjs.init("kua19bwPYY_FM1nMM");
        })();
    </script>
    <script>
        // Eamil
        const Validate = () => {
        let name = document.querySelector('.name');
        let email = document.querySelector('.email');
        let message = document.querySelector('.message');
        let sendBtn = document.querySelector('.send-btn');
        sendBtn.addEventListener('click' , (e) => {
            e.preventDefault();
                if (name.value == "" || email.value == "" || message.value == "") {
                    emptyerror();
                }
                else {
                    sendmail(name.value, email.value, message.value);
                    success();
                }
            })
        }
        Validate();
        function sendmail(name,email,message) {
            emailjs.send("service_nmgmlun","template_717b1qa",{
                from_name: name,
                to_name: email,
                message: message,
            });
        }
        const emptyerror = () => {
            swal({
                text: "Il faut remplir les champs",
                icon: "error",
            });
        }
        const success = () => {
            swal({
                title: "Email est envoyer avec success",
                icon: "success",
            });
            location.reload();
        }
    </script>
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