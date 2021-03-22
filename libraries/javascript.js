function loadBarre() {

    const winScroll = document.body.scrollTop || document.documentElement.scrollTop; // calcul le nb de pixel par rapport au top

    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight; // resultat du scrollTop

    const scrolled = (winScroll / height) * 100; //  
    console.log(scrolled);

    document.getElementById("myBar").style.width = scrolled + "%";

}

document.onscroll = function () {

    loadBarre();
};
function loadAnimation() {

    const winScroll = document.body.scrollTop || document.documentElement.scrollTop; // calcul le nb de pixel par rapport au top

    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight; // resultat du scrollTop

    const scrolled = (winScroll / height) * 100; //  
    console.log(scrolled);
    if (scrolled >= 65) {
        $('#test').fadeIn();
    }
    else {
        $('#test').fadeOut();
    }

}

document.onscroll = function () {

    loadAnimation()
};

// ta mere
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
 });
 $("#menu-toggle-2").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled-2");
    $('#menu ul').hide();
 });
 
 function initMenu() {
    $('#menu ul').hide();
    $('#menu ul').children('.current').parent().show();
    //$('#menu ul:first').show();
    $('#menu li a').click(
       function() {
          var checkElement = $(this).next();
          if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
             return false;
          }
          if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
             $('#menu ul:visible').slideUp('normal');
             checkElement.slideDown('normal');
             return false;
          }
       }
    );
 }
 $(document).ready(function() {
    initMenu();
 });