<div class="header-content">
    <div class="mySlides slider-1">
        <div class="numbertext">
            <i class="fa-solid fa-minus"></i>  &nbsp;
            02 &nbsp;
            03 &nbsp;
        </div>
        <div class="slider-text">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-8">
                    <div>
                        <h1> Mothers® France </h1>
                        <p> 
                            Quelque soit le besoin en produits de nettoyage
                            <br>
                            pour votre voiture, Mothers® a la réponse.
                        </p>
                        <button class="btn"> Découvrir </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mySlides slider-2">
        <div class="numbertext">
            01 &nbsp;
            <i class="fa-solid fa-minus"></i>  &nbsp;
            03 &nbsp;
        </div>
        <div class="slider-text">
            <div class="row">
                <div class="col-6">
                    <div>
                        <h1> Mothers® France </h1>
                        <p> 
                            Quelque soit le besoin en produits de nettoyage
                            <br>
                            pour votre voiture, Mothers® a la réponse.
                        </p>
                        <button class="btn"> Découvrir </button>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>

    <div class="mySlides slider-3">
        <div class="numbertext">
            01 &nbsp;
            02 &nbsp;
            <i class="fa-solid fa-minus"></i>  &nbsp;
        </div>
        <div class="slider-text">
            <h1> Mothers® France </h1>
            <p> 
                Quelque soit le besoin en produits de nettoyage
                <br>
                pour votre voiture, Mothers® a la réponse.
            </p>
            <button class="btn"> Découvrir </button>
        </div>
    </div>
    <a class="prev" onclick="plusSlides(-1)"> <i class="fa-solid fa-angle-left"></i> </a>
    <a class="next" onclick="plusSlides(1)"> <i class="fa-solid fa-angle-right"></i> </a>
</div>
<script>
    /*
    *   SlideShow 
    */
    let slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slides[slideIndex-1].style.display = "block"; 
    }
</script>