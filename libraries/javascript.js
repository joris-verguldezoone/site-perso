function showHide() {
    let button = document.getElementById("button");
    // équivalent de if(isset(onclick)) mais les dev en C t'insulte 
    button.onclick = function showAndHide() {
        let article = document.getElementById("article");
        if (article.style.display === "none")
        // si rien est affiché, (car style->display:none;) alors on affiche style->display:block;

        {
            article.style.display = "block";
        }
        else
        // si le click n'est pas fait ou qu'on retire le premier alors style->display:none;
        {
            article.style.display = "none";
        }
    }
}


// hide and show details


function loadBarre() {

    const winScroll = document.body.scrollTop || document.documentElement.scrollTop; // calcul le nb de pixel par rapport au top

    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight; // resultat du scrollTop

    const scrolled = (winScroll / height) * 100; //  

    document.getElementById("myBar").style.width = scrolled + "%";

}

document.onscroll = function () {

    loadBarre()
};
