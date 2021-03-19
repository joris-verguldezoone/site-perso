<?php
require('require/header.php');


?>
<main>

    <section id="accueil">1
        <h2>Bonjour et bienvenu sur mon Portefolio</h2>
    </section>
    <section class="cadre" id="humain">2
        <p>22 ans</p>
        <p><i class="fas fa-music"></i>Musique</p>
        <p class="p_techno"><i class="fas fa-chess"></i>Jeux de strategie</p>
        <p><i class="fas fa-dumbbell"></i>Sport</p>
        <p class="p_anime">Anime</p>
        <p> <i class="fas fa-utensils"></i>Cuisine</p>
        <p><i class="fas fa-meteor"></i>Astronomie<p> 
        <img src="images/Logo_JAXA.png"> 
        <p><i class="fas fa-id-card"></i> <a href=''>voir CV</a><p>
            <p>Citation de dieu : Fais selon ta volonté cf berserk/nieztsche</p>
            

    </section>
    <section id="machine">
        <article class="text_block">
            <p>Ambition</p>
            <article class="row_text">

                <p>dev mobile</p>
                <p>dev application</p>

            </article>

        <p>Compétences</p>
        <article class="row_text">
            <p>MCD</p>
                    <p>MVC</p>

        </article>
        </article>
            <section id='progressbar_block'>
                <article class="article_progressbar">
            
                    <p>BACK</p>
                    <div class="progress"> 
                    <div class="progress-bar  progress-bar-striped bg-dark" role="progressbar" style="width: 85%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>php </p>
                    <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>sql</p>
                    <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
            </article>
            <article class="article_progressbar">
                <p>FRONT</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p>html</p>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p>css</p>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p>js</p>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </article>
            
        </section>
        </section>

        </section>
    <section id="projet">4
    <p>blog</p>
    <p>boutique</p>
    <p>voyage</p>
    <p>phonoteque</p>
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