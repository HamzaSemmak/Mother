<div class="offer-poppin" id="offer-poppin">
    <div class="content-offer">
        <div class="img-offer">
            <img src="../../public/img/gift.png" alt="">
        </div>
        <div class="text-offer">
            <div class="title"> Offre spéciale </div>
            <div class="title-2"> <span> 30% </span> <sub> OFF </sub> </div>
            <div class="text">
                Felicitacion Vous avez Gangner un Produit
            </div>
            <div class="btn-field-offer">
                <a href="../core/AddToPanier.php?ID=22"> Obtenez l'offre </a>
            </div>

            <div class="close" id="close-offer">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
    </div>
</div>

<script>
    const closeoOffer = document.getElementById('close-offer');
    const offerPoppin = document.getElementById('offer-poppin');
    closeoOffer.addEventListener('click', () => {
        offerPoppin.style.display = "none";
    })
</script>