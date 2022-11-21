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

/*THEME*/

// function changeTheme(themeChoice) {
//     if(themeChoice == "bleu") {

//         document.documentElement.style.setProperty('--fond', '#151620');
//         document.documentElement.style.setProperty('--main', '#305394');
//         document.documentElement.style.setProperty('--itemBG', '#1f2a42');
//         document.documentElement.style.setProperty('--itemUG', '#344074');
//         document.documentElement.style.setProperty('--hoverButton', '#273B96');
//         document.documentElement.style.setProperty('--footerBG', '#11121d');

//     } else if(themeChoice == "rouge") {

//         document.documentElement.style.setProperty('--fond', '#201515');
//         document.documentElement.style.setProperty('--main', '#943030');
//         document.documentElement.style.setProperty('--itemBG', '#421f1f');
//         document.documentElement.style.setProperty('--itemUG', '#743434');
//         document.documentElement.style.setProperty('--hoverButton', '#962727');
//         document.documentElement.style.setProperty('--footerBG', '#1d1111');

//     } else if(themeChoice == "jaune") {

//         document.documentElement.style.setProperty('--fond', '#201e15');
//         document.documentElement.style.setProperty('--main', '#948230');
//         document.documentElement.style.setProperty('--itemBG', '#423f1f');
//         document.documentElement.style.setProperty('--itemUG', '#746a34');
//         document.documentElement.style.setProperty('--hoverButton', '#968227');
//         document.documentElement.style.setProperty('--footerBG', '#1d1c11');

//     } else if(themeChoice == "vert") {

//         document.documentElement.style.setProperty('--fond', '#182015');
//         document.documentElement.style.setProperty('--main', '#449430');
//         document.documentElement.style.setProperty('--itemBG', '#2d421f');
//         document.documentElement.style.setProperty('--itemUG', '#367434');
//         document.documentElement.style.setProperty('--hoverButton', '#309627');
//         document.documentElement.style.setProperty('--footerBG', '#151d11');

//     } else if(themeChoice == "rose") {

//         document.documentElement.style.setProperty('--fond', '#1f1520');
//         document.documentElement.style.setProperty('--main', '#833094');
//         document.documentElement.style.setProperty('--itemBG', '#3c1f42');
//         document.documentElement.style.setProperty('--itemUG', '#653474');
//         document.documentElement.style.setProperty('--hoverButton', '#962796');
//         document.documentElement.style.setProperty('--footerBG', '#1c111d');

//     }
// }

const themeSelect = document.getElementById("themeSelect");
const themeStyle = document.getElementById("themeStyle");

/* CHARGEMENT */

$(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
});