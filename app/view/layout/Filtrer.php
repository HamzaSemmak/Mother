<div class="filtrer" id="filtrer">
    <div class="close" id="close_filtrer">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="content">
        <hr class="hr-filtrer">
        <div class="section-1">
            <span> Prix : 9€ - 34€  </span>
            <span> Filtrer </span>
        </div>
        <div class="Groupe">
            <h6> Gammes produits </h6>
            <form action="">
                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes" checked> &nbsp; <span> California Bold</span>
                    </label>
                    <div class="text"> 19 </div>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Mothers® Classic </span>
                    </label>
                    <div class="text"> 22 </div>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Speed </span>
                    </label>
                    <div class="text"> 6 </div>
                </div>
                
                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Power products </span>
                    </label>
                    <div class="text"> 6 </div>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Professionnel </span>
                    </label>
                    <div class="text"> 13 </div>
                </div>
            </form>
        </div>

        <div class="Groupe">
            <h6> Utilisation </h6>
            <form action="">
                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes" checked> &nbsp; <span> Rénover </span>
                    </label>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Polir </span>
                    </label>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Laver </span>
                    </label>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Lustrer & protéger </span>
                    </label>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Entretenir </span>
                    </label>
                </div>
            </form>
        </div>
        
        <div class="Groupe">
            <h6> Utilisation </h6>
            <form action="">
                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes" checked> &nbsp; <span> Catégorie </span>
                    </label>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Pneus </span>
                    </label>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Intérieur </span>
                    </label>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Phares </span>
                    </label>
                </div>

                <div class="field">
                    <label for="">
                        <input type="radio" name="Gammes"> &nbsp; <span> Entretenir </span>
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    /*
    *   Filtrer :
    */
    const Filtrer = document.getElementById("filtrer");
    const close_filtrer = document.getElementById("close_filtrer");
    const Open_filtrer = document.getElementById('Open_filtrer');

    close_filtrer.addEventListener('click', () => {
        Filtrer.style.display = "none";
    });
    Open_filtrer.addEventListener('click', () => {
        Filtrer.style.display = "block";
    });
</script>