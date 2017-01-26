<?php

    /*
        Template Name: CV Page
    */

    get_header();
?>
    <section class="cv cv-section clearfix">
        <h2 class="sro">Curiculum Vitae de Anne Remacle</h2>

        <section class="cv__head">
            <h3 class="cv__name">Anne Remacle</h3>

            <figure class="cv__figure">
                <img class="cv__img" src="http://anne-remacle.be/wp-content/uploads/2016/05/anne.jpg" alt="Portrait de Anne Remacle" />
            </figure>
            <div class="cv__infos infos">
                <p class="infos__item infos__item--address"><i class="fa fa-envelope infos__item--icon"></i> réside à Liège</p>
                <p class="infos__item infos__item--transport"><i class="fa fa-car infos__item--icon"></i> Permis B - Voiture</p>
                <p class="infos__item infos__item--phone"><i class="fa fa-phone infos__item--icon"></i> 0494/22 50 00</p>
                <a class="infos__item infos__item--mail" title="envoyer un email à Anne" href="mailto:anne.m.remacle@gmail.com"><i class="fa fa-paper-plane infos__item--icon"></i>anne.m.remacle@gmail.com</a>
                <a class="infos__item infos__item--git" title="Vers le compte Github de Anne" href="https://github.com/AnneRemacle"><i class="fa fa-github infos__item--icon"></i>Github</a>
            </div>
        </section>

        <div class="second">
            <div class="columns">
                <section class="experience cv-section" >
                    <h3 class="cv__sectionTitle cv__sectionTitle--exp">Expériences</h3>
                    <ul class="cv__list">
                     	<li class="cv__list--item item">
                            <strong class="item__title">Price Audit</strong>
                            <span class="item__date"><time datetime="2013-04">Avril 2013</time> - <time datetime="2014-07">Juillet 2014</time></span>
                            Service Innovation Group, Froyennes
                        </li>
                     	<li class="cv__list--item item"><strong class="item__title">Vendeuse</strong><span class="item__date"><time datetime="2013-03">Mars 2013</time> - <time datetime="2013-04">Avril 2013</time></span>Véritas, Liège et Rocourt</li>
                     	<li class="cv__list--item item"><strong class="item__title">Graphiste</strong><span class="item__date"><time datetime="2012-03">Mars 2012</time></span>Ades s.a., Beaufays</li>
                     	<li class="cv__list--item item"><strong class="item__title">Secrétaire</strong><span class="item__date"><time datetime="2010">2010</time> - <time datetime="2011">2011</time></span>Étude de M<sup>e</sup> Franchimont, Liège</li>
                    </ul>
                </section>
                <section class="formation cv-section" >
                    <h3 class="cv__sectionTitle cv__sectionTitle--formation">Formation</h3>
                    <ul class="cv__list">
                     	<li class="cv__list--item item"><strong class="item__title">Baccalauréat en Techniques infographiques, option Web </strong><span class="item__date"><time datetime="2014">2014</time> - <time datetime="2017">2017</time></span>Haute École de la Province de Liège, HEPL (anciennement INPRES)</li>
                     	<li class="cv__list--item item"><strong class="item__title">Certificat en Techniques Habillement</strong><span class="item__date"><time datetime="2012">2012</time> - <time datetime="2014">2014</time></span>École FPS Liège</li>
                     	<li class="cv__list--item item"><strong class="item__title">Baccalauréat en Graphisme</strong><span class="item__date"><time datetime="2008">2008</time> - <time datetime="2011">2011</time></span>École Supérieure des Arts Saint-Luc, Liège</li>
                    </ul>
                </section>
            </div>
            <div class="columns">
                <section class="competences cv-section" >
                    <h3 class="cv__sectionTitle cv__sectionTitle--comp">Compétences</h3>
                    <section class="competences__list languages">
                        <h4 class="cv__list--title">Langages</h4>
                        <ul class="cv__list">
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--html">HTML</strong>
                            </li>
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--css">CSS</strong>
                            </li>
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--js">Javascript</strong>
                            </li>
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--php">PHP</strong>
                            </li>
                        </ul>
                    </section>
                    <section class="competences__list cms">
                        <h4 class="cv__list--title">C.M.S.</h4>
                        <ul class="cv__list">
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--wp">Wordpress</strong>
                            </li>
                        </ul>
                    </section>
                    <section class="competences__list design">
                        <h4 class="cv__list--title">Design</h4>
                        <ul class="cv__list">
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--ps">Photoshop</strong>
                            </li>
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--ai">Illustrator</strong>
                            </li>
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--id">InDesign</strong>
                            </li>
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--sketch">Sketch</strong>
                            </li>
                        </ul>
                    </section>
                    <section class="competences__list editors">
                        <h4 class="cv__list--title">Éditeurs de texte</h4>
                        <ul class="cv__list">
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--sublime">Sublime Texte</strong>
                            </li>
                         	<li class="cv__list--item item">
                                <strong class="item__name item__name--atom">Atom</strong>
                            </li>
                        </ul>
                </section>
                <section class="competences__list langues">
                    <h4 class="cv__list--title">Langues</h4>
                    <ul class="cv__list">
                     	<li class="cv__list--item item"><strong class="item__name">Français</strong><span class="item__star "> langue maternelle</span></li>
                     	<li class="cv__list--item item"><strong class="item__name">Anglais</strong><span class="item__star "> niveau C1</span></li>
                     	<li class="cv__list--item item"><strong class="item__name">Néérlandais</strong><span class="item__star"> niveau A1</span></li>
                    </ul>
                </section>
                </section>
                <section class="loisirs cv-section" >
                    <h4 class="cv__sectionTitle cv__sectionTitle--like">Centres d'intérêt</h4>
                    <ul class="loisirs__list">
                     	<li class="loisirs__list-item item">Jeu de rôles grandeur nature</li>
                     	<li class="loisirs__list-item item">Chats</li>
                     	<li class="loisirs__list-item item">Café</li>
                     	<li class="loisirs__list-item item">Escrime</li>
                     	<li class="loisirs__list-item item">Couture</li>
                     	<li class="loisirs__list-item item">Lecture</li>
                    </ul>
                </section>
            </div>
        </div>

    </section>

<?php
    get_footer();
