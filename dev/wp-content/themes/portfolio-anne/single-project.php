<?php

    /*
        Template Name: Single Court Métrage
    */

    get_header();
?>

    <?php
        if ( have_posts() ):
            while ( have_posts() ):
                the_post(); ?>
    <section class="content single-project clearfix">
        <h2 class="single-project__title section__title">
            <?php the_field('project_title'); ?>
            <span class="single-project__type">
                Techniques utilisées&nbsp;:
                <?php
                the_field('techniques_name');
                 ?>
            </span>
        </h2>

        <?php the_content(); ?>

    </section>

    <div class="single-project__button clearfix">
        <a href="http://<?php the_field('url_site'); ?>" class="single-project__link">Voir le projet</a> -
        <a href="http://<?php the_field('github_url'); ?>" class="single-project__link" rel="external">Repo Github</a>
    </div>

    <?php
            endwhile;
        endif; ?>

<?php
    get_footer();
