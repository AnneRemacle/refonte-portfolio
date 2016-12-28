<?php
    /*
        Template Name: Homepage
    */
    get_header();
?>
<section class="presentation">
<h2 class="sro">Anne Remacle</h2>
<?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post(); ?>

        <?php $image = get_field('anne_img');?>
        <figure data-aos="fade-right" class="presentation__figure">

            <img class="presentation__img clearfix" src="<?php echo $image['url']; ?>" alt="Photo de Anne Remacle" />
        </figure>

            <?php the_content(); ?>

        <div class="background">
                <div data-aos="fade-right" class="presentation__bloc">
                <p class="presentation__text">
                    <?php the_field('me_text_first'); ?>
                </p>
            </div>
            <div data-aos="fade-left" class="presentation__bloc">
                <p class="presentation__text">
                    <?php the_field('me_text_second'); ?>
                </p>
            </div>
        </div>
    </section>
<?php endwhile;
endif;
?>

    <section class="projets section">
            <h2 class="section__title sro">Mes trois derniers projets</h2>
            <ul class="projets__list">
                <li data-aos="fade-up" class="projets__single">
                    <a class="projets__single--title" href="project/sur-un-baobab" title="Voir la fiche technique du projet sur un Baobab">Sur un Baobab</a>
                </li>
                <li data-aos="fade-up" class="projets__single">
                    <a class="projets__single--title" href="project/projet-cv-linkedin" title="Voir la fiche technique du projet CV Linkedin">CV Linkedin</a>
                </li>
                <li data-aos="fade-up" class="projets__single">
                    <a class="projets__single--title" href="project/jeu-cadenas" title="Voir la fiche technique du projet KDNA">KDNA</a>
                </li>
            </ul>
        </section>

<?php
    get_footer();
