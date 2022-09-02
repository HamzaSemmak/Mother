<div class="navbar" id="navbar">
    <div class="nav-items">
        <div class="nav-link"> 
            Notre gamme &nbsp; 
            <i class="fa-solid fa-chevron-down"></i> 
            <div class="dropdown-content">
                <a href="../view/catalogue.php" class="dropdown-link"> Nos Produits  </a> <br>
                <a href="../view/fiche-product.php?ID=1" class="dropdown-link"> Golden Product </a> 
            </div>
        </div>
        <div class="nav-link"> 
            Categorie &nbsp; 
            <i class="fa-solid fa-chevron-down"></i>
            <div class="dropdown-contents">
                <a href="../view/Categorie.php?Categorie=BEST-SELLERS" class="dropdown-link"> BEST-SELLERS </a> <br>
                <a href="../view/Categorie.php?Categorie=NOS PACKS" class="dropdown-link"> NOS PACKS  </a> <br>
                <a href="../view/Categorie.php?Categorie=NOTRE SÉLECTION" class="dropdown-link"> NOTRE SÉLECTION  </a> <br>
                <a href="../view/Categorie.php?Categorie=NOS GAMMES" class="dropdown-link"> NOS GAMMES </a> 
            </div>
        </div>
        <div class="nav-link"> 
            zone d'application &nbsp; 
            <i class="fa-solid fa-chevron-down"></i> 
            <div class="dropdown-content">
                <a href="../view/DetailGuide.php" class="dropdown-link"> Guide du détailling  </a> <br>
                <a href="../view/Video.php" class="dropdown-link"> Vidéos </a> 
            </div>
        </div>
    </div>
    <div class="logo">
        <a href="./Home.php">
            <img src="../../public/img/NewLogo.png" width="auto" height="auto" alt="">
        </a>
    </div>
    <div class="nav-items">
        <div class="nav-link"> 
            notre entreprise &nbsp; 
            <i class="fa-solid fa-chevron-down"></i> 
            <div class="dropdown-content">
                <a href="../view/Notre Histoire.php" class="dropdown-link"> Notre Histoire  </a> <br>
                <a href="../view/Actualités.php" class="dropdown-link"> Actualités </a> 
            </div>
        </div>
        <div class="nav-link"> 
            <a href="../view/NosConseils.php" class="nav-link-a"> nos conseils d'experts </a>
        </div>
        <div class="nav-link">
            <a href="../view/Contact.php" class="nav-link-a"> contactez-nous </a> 
        </div>
    </div>

    <div class="navbar-icons">
        <a class="icons" id="open_panier" > <i class="fa-solid fa-cart-shopping"></i> </a> 
        <!-- <a class="icons" href="#"> <i class="fa-regular fa-circle-user"></i> </a> -->
        <a class="icons" id="open_poppin_search"> <i class="fa-solid fa-magnifying-glass"></i> </a>
        <!--  -->
        <div class="navigation">
            <input type="checkbox" class="toggle-menu">
            <div class="hamburger"></div>
            <!--  -->
            <div class="menu">
                <ul class="menu-items">
                    <li class="menu-link"> 
                        <div class="menu-link-one">
                            Notre gamme 
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="dropdown-content">
                            <a href="../view/catalogue.php" class="dropdown-link"> Nos Produits  </a> <br>
                            <a href="../view/fiche-product.php?ID=1" class="dropdown-link"> Golden Product </a> 
                        </div>
                    </li>
                    <li class="menu-link"> 
                        <div class="menu-link-one">
                            Categorie 
                            <i class="fa-solid fa-chevron-down"></i> 
                        </div>
                        <div class="dropdown-content">
                            <a href="../view/Categorie.php?Categorie=BEST-SELLERS" class="dropdown-link"> BEST-SELLERS </a> <br>
                            <a href="../view/Categorie.php?Categorie=NOS PACKS" class="dropdown-link"> NOS PACKS  </a> <br>
                            <a href="../view/Categorie.php?Categorie=NOTRE SÉLECTION" class="dropdown-link"> NOTRE SÉLECTION  </a> <br>
                            <a href="../view/Categorie.php?Categorie=NOS GAMMES" class="dropdown-link"> NOS GAMMES </a> 
                        </div>
                    </li>
                    <li class="menu-link">
                        <div class="menu-link-one">
                            zone d'application 
                            <i class="fa-solid fa-chevron-down"></i> 
                        </div>
                        <div class="dropdown-content">
                            <a href="../view/DetailGuide.php" class="dropdown-link"> Guide du détailling  </a> <br>
                            <a href="../view/Video.php" class="dropdown-link"> Vidéos </a> 
                        </div>
                    </li>
                    <li class="menu-link"> 
                        <div class="menu-link-one">
                            notre entreprise 
                            <i class="fa-solid fa-chevron-down"></i> 
                        </div>
                        <div class="dropdown-content">
                            <a href="../view/Notre Histoire.php" class="dropdown-link"> Notre Histoire  </a> <br>
                            <a href="../view/Actualités.php" class="dropdown-link"> Vidéos </a> 
                        </div>
                    </li>
                    <li class="menu-link">
                        <a href="../view/NosConseils.php" class="nav-link-a"> nos conseils d'experts </a>
                    </li>
                    <li class="menu-link"> 
                        <a href="../view/Contact.php" class="nav-link-a"> contactez-nous </a> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div> <?php include 'popin-recherche.php'?> </div>


<a href="#" class="btnScrollTop" id="btnScrollTop">
    <i class="fa-solid fa-chevron-up"></i>   
</a>


<script>
    /*
    *   Search Bar : 
    */
    const open_poppin_search = document.getElementById('open_poppin_search');
    const poppin_search = document.getElementById('search');
    const Close_poppin_search = document.getElementById('Close_poppin_search');

    open_poppin_search.addEventListener('click', () => {
        poppin_search.style.display = "block";
    })
    Close_poppin_search.addEventListener('click', () => {
        poppin_search.style.display = "none";
    })

    const btnScrollTop = document.getElementById('btnScrollTop');

    window.onscroll = function() {
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            btnScrollTop.style.display = "block";
        } else {
            btnScrollTop.style.display = "none";
        }
    };
</script>

