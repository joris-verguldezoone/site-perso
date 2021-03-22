<?php
require('require/header.php');


?>
<main>

    <section id="accueil">
        <h2>Bonjour et bienvenu sur mon Portefolio</h2>
    </section>
    <section class="cadre" id="humain">

     <div class='display_presentation'>
        <div class="div_presentation">
            <img id='photo2moa' src="images/photo2moa.jpg" alt="photo de moi"> 
            <p class="p_presentation">Je suis un developper <strong>full-Stack</strong> issu de <strong>La Plateforme</strong> a Marseille. Actuellement en formation je suis disponible a partir du 1er septembre pour de l'alternance</p>
            <a class="p_presentation a_button" href='images/CV-VERGULDEZOONE_JORIS.pdf' target="_blank">Mon parcours, mon CV</a>
        </div>
<!--  
            <article class="presentation_humain">
                <img src='images/netero.png'>
                <p>développeur a temps plein mais pas que</p>
            </article>
            
            <h4>Routine</h4>
            <article class="presentation_humain">
                 <p class="p_techno"><i class="fas fa-chess"></i>Jeux de strategie</p>
                <p></p> 
                <article class="presentation_humain_column">
                    <i class="fas fa-dumbbell icon"></i>
                    <div clas="presentation_humain_column">
                        <h5>Le sportif</h5>
                        <p> Toujours partant ! Roller _ musculation _ sports collectifs</p>
                    </div>
                </article>
                <article class="presentation_humain_column">
                <i class="fas fa-poo"></i>
                <div clas="presentation_humain_column">
                    <h5>Le motivateur </h5>          
                    <p>De grands discours de motivation que personne n'écoute</p>
                </div>
                    <p>Cuisine</p>
                </article>
                <article class="presentation_humain_column">
                    <i class="fas fa-utensils icon"></i>
                    <div clas="presentation_humain_column">
                        <h5>Le cuisto</h5>
                        <p>De l'aligot aux ramens</p>

                    </div>

                </article>
            </article>
        
            <h4>Loisir</h4>
            
            <article class="presentation_humain">
                <article class="presentation_humain_column">
                    <i class="fas fa-music icon"></i>
                    <div class="presentation_humain_column">
                        <h5>Le rythm</h5>
                        <p>basse guitare ableton</p>
                    </div>
                </article>


                
                <article class="presentation_humain_column">
                    <h5 class="p_anime">Manga /Bande dessinée</h5>
                    <p>Requieme, hxh, berserk, GITS, akira, fma</p>

                </article>
                <article class="presentation_humain_column">
                    <i class="fas fa-meteor icon"></i>
                <p>Astronomie<p>
                <div class="presentation_humain_column">
                <h5>Le visiteur</h5>
                    
                    <p>Le plus difficile est d'avoir les pieds sur terre</p>
                </div> 
                <img src="images/Logo_JAXA.png">
                </article>
            </article>
                <article class="presentation_humain_column">
                    <h4>Mon parcours</h4>
                        <p><i class="fas fa-id-card icon"></i> <a href=''>voir CV</a><p>
                            </article>
                            <article class="presentation_humain_column">
                                <p>Citation de dieu : Fais selon ta volonté cf berserk/nieztsche</p>
                            </article>
                </article> -->
            </div> 
        </section>

    <section id="machine">
        <div class="display_cadre">
            <h4>La machine</h4>
            <section id='progressbar_block'>
                <article class="article_progressbar">
                
                        <p>BACK</p>
                        <div class="progress"> 
                            <div class="progress-bar" id='back'  style="width: 87.5%;"></div>
                        </div>
                        <p>php </p>
                        <div class="progress">
                            <div class="progress-bar " id='php' style="width: 90%"></div>
                        </div>
                        <p>sql</p>
                        <div class="progress">
                            <div class="progress-bar " id='sql' style="width: 85%" ></div>
                        </div>
                    <div class="text_block_row">
                        <p>MVC<i class="fas fa-check"></i></p>
                        <p>MCD<i class="fas fa-check"></i></p>
                    </div>
                </article>
                <article class="article_progressbar">
                    <p>FRONT</p>
                    <div class="progress">
                        <div class="progress-bar " id='front' style="width: 65%"></div>
                    </div>
                    <p>html</p>
                    <div class="progress">
                        <div class="progress-bar " id='html' style="width: 80%" ></div>
                    </div>
                    <p>css</p>
                    <div class="progress">
                        <div class="progress-bar " id='css' style="width: 65%"></div>
                    </div>
                    <p>js</p>
                    <div class="progress">
                        <div class="progress-bar " id='js' style="width: 55%"></div>
                    </div>
                </article>
                
            </div>
            <div class="row_img">
                <img class='img_langage' src='images/php.png' alt='Php'>
                <img class='img_langage' src='images/sql.png' alt='Sql'>
                <img class='img_langage' src='images/html5-icon-13.jpg' alt='Html'>
                <img class='img_langage' src='images/css.png' alt='Css'>
                <img class='img_langage' src='images/javascript.png' alt='Javascript'>
                
            </div>
        </section>

    </section>
    <section id="projet">
            <div class="display_flex_row">
            <h5>Boutique</h5>
            <h5>Phonoteque</h5>
            </div>
            <div class="display_flex_row">
                <a class=""><img class="projet_img_dimension" src="images/boutique.png" alt="boutique en ligne" ></a>
                    
                <a class=""><img class="projet_img_dimension" src="images/phonoteque.png" alt="phonoteque" ></a> 
            </div>
            <div class="display_flex_row">
            <h5>Discussion</h5>
            <h5>Blog</h5>
            </div>
            <div class='display_flex_row'>
                
                <a class=""><img class="projet_img_dimension" src="images/Discussions.png" alt="site de discussion" ></a>

                
                <a class=""><img class="projet_img_dimension" src="images/blog.png" alt="blog sur les jeux vidéos" ></a>
            </div>
            <div id='test'>

            <p class='p_slide' class='revealOnScroll' data-animation='fadeInUp'>En cours d'importation...</p >
            </div>
    </section>
    
   
    
    <section id="contact">5

<button id="button" type="button" onclick="showHide()">coucou</button>
<div id="article">je suis une phrase</div>
    tel 
    mail
    linkedin
    
    </section>
    <section id="footer">6
        copyright

    </section>



    
</main>


<?php

require('require/footer.php');
?>