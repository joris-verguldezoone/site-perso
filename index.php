<?php
require('require/header.php');


?>
<main>

    <section id="accueil">
    <div class='center_top'>

        <h2>Bonjour et bienvenu sur mon Portfolio</h2>
    </div>
    <div class='center'>

        <section id='fleche_accueil'><a href='#humain'><img src='images/down-arrow.png' class='array' alt='down arrow'></a></section>
    </div>
    </section>
    <section class="cadre" id="humain">

     <div class='display_presentation'>
        <div class="div_presentation">
            <img id='photo2moa' src="images/photo2moa.jpg" alt="photo de moi"> 
            <p class="p_presentation">Je suis un developper <strong>full-Stack</strong> issu de <strong>La Plateforme</strong> a Marseille. Actuellement en formation je suis disponible a partir du 1er septembre pour de l'alternance</p>
            <a class="p_presentation a_button" href='images/CV-VERGULDEZOONE_JORIS.pdf' target="_blank">Mon parcours, mon CV</a>
        </div>
            </div> 
        </section>

    <section id="machine">
        <span class=' titre_partie_machine'>La machine</span>
        <div class="display_cadre">
                        <!-- <span class='p_presentation'>Conception:</span> -->
            <div id='conception'>
                <section id='progressbar_block'>  
                    <div class="text_block_row">
                        <span class='p_presentation'>MVC<i class="fas fa-check"></i></span>
                        <span class='p_presentation'>MCD<i class="fas fa-check"></i></span>
                        <span class='p_presentation'>MLD<i class="fas fa-check"></i></span>      
                    </div>
             </section> 
                  
            </div>
            <div class='space_around_row_machine'>
                <div class='column'>
                    <span class='p_presentation'>Maquettage</span>
                    <img src='images/figma-logo.webp' class="img_langage_horizontal" alt='Logo de figma'>
                </div>
                <div class='column'>
                    <span class='p_presentation'>API paiement</span>
                    <img src='images/stripe-logo-blue.png' class="img_langage_horizontal" alt='Logo de Stripe'>
                </div>
                <div class='column'>
           

            </div>
        </div>
        <div id='langages'>
            <div class="row_img_langages">
                <img class='img_langage' src='images/php.png' alt='Logo de Php'>
                <img class='img_langage' src='images/sql.png' alt='Logo de Sql'>
                <img class='img_langage' src='images/html5-icon-13.jpg' alt='Logo de Html'>
                <img class='img_langage' src='images/css.png' alt='Logo de Css'>
                <img class='img_langage' src='images/javascript.png' alt='Logo de Javascript'>
            </div>
        </div>
           
        </section>

    </section>
    <section id="projet">
        <span class="titre_partie">Projet</span>
            <div class="display_flex_row_titre">
            <span class=' p_presentation titre_projet'>Boutique</span>
            <span class=' p_presentation titre_projet'>Phonoteque</span>
            </div>
            <div class="display_flex_row">
                <a class=""><img class="projet_img_dimension" src="images/boutique.png" alt="Projet boutique en ligne" ></a>
                    
                <a class=""><img class="projet_img_dimension" src="images/phonoteque.png" alt="Projet phonoteque" ></a> 
            </div>
            <div class="display_flex_row_titre">
            <span class=' p_presentation titre_projet'>Discussion</span>
            <span class='p_presentation titre_projet'>Blog</span>
            </div>
            <div class='display_flex_row'>
                
                <a class=""><img class="projet_img_dimension" src="images/Discussions.png" alt="site de discussion" ></a>

                
                <a class=""><img class="projet_img_dimension" src="images/blog.png" alt="blog sur les jeux vidéos" ></a>
            </div>
            <div id='test'>

            <p class='p_slide' class='revealOnScroll' data-animation='fadeInUp'>En cours d'importation...</p >
            </div>
    </section>
    
   
    
    <section id="contact">

    <section class='space_around_row'>
        <div class='column'>
            <a href='https://www.linkedin.com/in/joris-verguldezoone-36a39b153/' target='_blank'><i class="fab fa-linkedin"></i></a>
            <span class='p_presentation'>Connectons nous</span>
            
        </div>
        <div class='column'>
            <a href='mailto:joris.verguldezoone@laplateforme.io' target='_blank'><i class="far fa-envelope envelope2"></i></a>    
            <span class='p_presentation'>Envoyez moi un mail</span>

        </div>
        <div class='column'>
            <a href='https://github.com/joris-verguldezoone' target='_blank'><i class="fab fa-github-square"></i></a>
            <span class='p_presentation'>Inspectez mes projets</span>

        </div>
    </section>
    <section class='space_around_row'>
        <span>©Joris Verguldezoone | 2021</span>
    </section>
</section>  



    
</main>



<?php

require('require/footer.php');
?>