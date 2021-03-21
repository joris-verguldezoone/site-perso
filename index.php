<?php
require('require/header.php');


?>
<main>

    <section id="accueil">
        <h2>Bonjour et bienvenu sur mon Portefolio</h2>
    </section>
    <section class="cadre" id="humain">

     <div class='display_cadre'>
        <div class="div_presentation">
            <img alt="photo de moi"> 
            <p class="p_presentation">Je suis un developper <strong>full-Stack</strong> issu de <strong>La Plateforme</strong> a Marseille. Actuellement en formation je suis disponible a partir du 1er septembre pour de l'alternance</p>
            <a class="p_presentation a_button">Mon parcours, mon CV</a>
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
        <article class="text_block">
            <article class="row_text">
            <h5>Ambition</h5>

                <p>dev mobile</p>
                <p>dev application</p>

            </article>

            <article class="row_text">
            <h5>Compétences</h5>
                <p>MCD</p>
                <p>MVC</p>

            </article>
        </article>
        
        <section id='progressbar_block'>
            <article class="article_progressbar">
            
                    <p>BACK</p>
                    <div class="progress"> 
                    <div class="progress-bar" id='back'  style="width: 85%;"></div>
                    </div>
                    <p>php </p>
                    <div class="progress">
                    <div class="progress-bar " id='php' style="width: 90%"></div>
                    </div>
                    <p>sql</p>
                    <div class="progress">
                    <div class="progress-bar " id='sql' style="width: 85%" ></div>
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
                    <div class="progress-bar " id='js' style="width: 60%"></div>
                </div>
            </article>
            </div>
        </section>

    </section>
    <section id="projet">
        <section class="display_cadre">
            <div class="display_flex_row">
            <h5>boutique</h5>
            <h5>blog</h5>
            </div>
            <div class="display_flex_row">
                <a class=""><img class="projet_img_dimension" src="" alt="" ></a>
                    
                <a class=""><img class="projet_img_dimension" src="" alt="" ></a>   
            </div>
            <div class="display_flex_row">
            <h5>voyage</h5>
            <h5>phonoteque</h5>
            </div>
            <div class='display_flex_row'>
                
                <a class=""><img class="projet_img_dimension" src="" alt="" ></a>

                
                <a class=""><img class="projet_img_dimension" src="" alt="" ></a>
            </div>
        </section>
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