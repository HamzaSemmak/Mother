<div class="header" id="header">
    <div class="header__toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>
    <div class="header__img">
        <a href="../../view/Home.php" target="_blank"> VIEW DEMO </a>
    </div>
</div>

<div class="l-navbar" id="nav-bar">
    <div class="nav">
        <div>
            <a href="#" class="nav__logo">
                <i class='bx bx-layer nav__logo-icon'></i>
                <span class="nav__logo-name"> MOTHERS </span>
            </a>

            <div class="nav__list">
                <a href="./index.php" class="nav__link">
                    <i class="fa-solid fa-border-all nav__icon"></i>
                    <span class="nav__name">Dashboard</span>
                </a>

                <a href="./Product.php" class="nav__link">
                    <i class="fa-solid fa-cart-shopping nav__icon"></i>
                    <span class="nav__name"> Product </span>
                </a>

                <a href="./Add.php" class="nav__link">
                    <i class="fa-solid fa-plus nav__icon"></i>
                    <span class="nav__name"> Add Product </span>
                </a>
            </div>
        </div>

        <a href="#" class="nav__link">
            <i class="fa-solid fa-arrow-right-from-bracket nav__icon"></i>
            <span class="nav__name">Log Out</span>
        </a>
    </div>
</div>

<script>
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
        const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)
        if(toggle && nav && bodypd && headerpd){
            toggle.addEventListener('click', ()=>{
                nav.classList.toggle('show')
                toggle.classList.toggle('bx-x')
                bodypd.classList.toggle('body-pd')
                headerpd.classList.toggle('body-pd')
            })
        }
    }
    showNavbar('header-toggle','nav-bar','body-pd','header');
    
    const linkColor = document.querySelectorAll('.nav_link')
    function colorLink(){
        if(linkColor){
            linkColor.forEach(l=> l.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
</script>