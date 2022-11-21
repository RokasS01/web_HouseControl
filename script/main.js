/*PAGE GO*/

$(document).ready(function() {
    $('.scrolldown').on('click', function() {
        var page = $(this).attr('href'); 
        var speed = 750;
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed );
        return false;
    });
});

function goTOP() {
    window.scrollTo({ top: 0, behavior: 'smooth' })
}

/*CATEGORIE*/

const chauffage = document.querySelectorAll('.chauffage');
const portes = document.querySelectorAll('.portes');
const eclairage = document.querySelectorAll('.eclairage');

document.getElementById("selectAll").onclick = function() {CatSelec("all")};
document.getElementById("selectchauffages").onclick = function() {CatSelec("chauffage")};
document.getElementById("selectportes").onclick = function() {CatSelec("portes")};
document.getElementById("selecteclairages").onclick = function() {CatSelec("eclairage")};

function CatSelec(cat) {

    if(cat == "chauffage") {
        if( chauffage.length > 0 ){
            for(var h = 0; h < chauffage.length; h++){
                chauffage[h].style['display'] = 'block';  
            }
        }
        if( portes.length > 0 ){
            for(var h = 0; h < portes.length; h++){
                portes[h].style['display'] = 'none';  
            }
        }
        if( eclairage.length > 0 ){
            for(var h = 0; h < eclairage.length; h++){
                eclairage[h].style['display'] = 'none';  
            }
        }

        document.getElementById("selecteclairages").classList.remove("active");
        document.getElementById("selectportes").classList.remove("active");
        document.getElementById("selectchauffages").classList.add("active");
        document.getElementById("selectAll").classList.remove("active");

    } else if(cat == "portes") {
        if( chauffage.length > 0 ){
            for(var h = 0; h < chauffage.length; h++){
                chauffage[h].style['display'] = 'none';  
            }
        }
        if( portes.length > 0 ){
            for(var h = 0; h < portes.length; h++){
                portes[h].style['display'] = 'block';  
            }
        }
        if( eclairage.length > 0 ){
            for(var h = 0; h < eclairage.length; h++){
                eclairage[h].style['display'] = 'none';  
            }
        }

        document.getElementById("selecteclairages").classList.remove("active");
        document.getElementById("selectportes").classList.add("active");
        document.getElementById("selectchauffages").classList.remove("active");
        document.getElementById("selectAll").classList.remove("active");

    } else if(cat == "eclairage") {
        if( chauffage.length > 0 ){
            for(var h = 0; h < chauffage.length; h++){
                chauffage[h].style['display'] = 'none';  
            }
        }
        if( portes.length > 0 ){
            for(var h = 0; h < portes.length; h++){
                portes[h].style['display'] = 'none';  
            }
        }
        if( eclairage.length > 0 ){
            for(var h = 0; h < eclairage.length; h++){
                eclairage[h].style['display'] = 'block';  
            }
        }

        document.getElementById("selecteclairages").classList.add("active");
        document.getElementById("selectportes").classList.remove("active");
        document.getElementById("selectchauffages").classList.remove("active");
        document.getElementById("selectAll").classList.remove("active");

    } else if(cat == "all") {
        if( chauffage.length > 0 ){
            for(var h = 0; h < chauffage.length; h++){
                chauffage[h].style['display'] = 'block';  
            }
        }
        if( portes.length > 0 ){
            for(var h = 0; h < portes.length; h++){
                portes[h].style['display'] = 'block';  
            }
        }
        if( eclairage.length > 0 ){
            for(var h = 0; h < eclairage.length; h++){
                eclairage[h].style['display'] = 'block';  
            }
        }

        document.getElementById("selecteclairages").classList.remove("active");
        document.getElementById("selectportes").classList.remove("active");
        document.getElementById("selectchauffages").classList.remove("active");
        document.getElementById("selectAll").classList.add("active");
    }
}

/* CHARGEMENT */

$(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
});

/* NOTIF TEMP */

const notif = document.querySelector('#tempNotif');

function tempShow () {
    notif.classList.add("show");
    setTimeout(() => {
        notif.classList.remove("show");
    }, 5000);
}
