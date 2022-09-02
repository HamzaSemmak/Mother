/*
*   Popins cookies 
*/
const poppin_modal = document.getElementById('popins');
const Close_poppin_modal = document.getElementById('Close_poppin_modal');
Close_poppin_modal.addEventListener('click', () => {
    poppin_modal.classList.toggle('hide');
});
window.onload = function() {
    poppin_modal.style.display = "block";
}
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
/*
*   Panier
*/
const open_panier = document.getElementById('open_panier');
const panier = document.getElementById('panier');
const close_panier = document.getElementById('close_panier');
open_panier.addEventListener('click', () => {
    panier.style.display = "block";
});
close_panier.addEventListener('click', () => {
    panier.style.display = "none";
});
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

/*
*
*   Dashboard : 
*
*/
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

/*
*
*   Search :
*   Ajax Php Mysql 
*
*/
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