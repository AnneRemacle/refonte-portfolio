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

            <?php if( have_rows('presentation') ): ?>
                <?php while ( have_rows('presentation') ) : the_row(); ?>
                    <div data-aos="fade-up" class="presentation__bloc">
                            <?php $image = get_sub_field('icone'); ?>
                            <figure class="presentation__icon">
                                <img class="presentation__icon--img" src="<?php echo $image['url']; ?>" alt="icone illustrative">
                            </figure>
                            <?php the_sub_field('texte'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php endwhile;
endif;
?>

    <section class="projets section">
            <h2 class="section__title sro">Mes trois derniers projets</h2>
            <ul class="projets__list">
                <?php $posts = new WP_Query( [ 'orderby' => 'date', 'posts_per_page' => 3, 'order' => 'DESC', 'post_type' => 'project' ] ); ?>
    			    <?php if ( $posts -> have_posts() ):
    			        while ( $posts -> have_posts() ):
    			            $posts -> the_post(); ?>
                <li data-aos="fade-up" class="projets__single">
                    <figure class="projets__figure">
                        <?php $image = get_field('homepage_img'); ?>
                        <img class="projets__figure--img" src="<?php echo $image['url']; ?>" alt="capture d'écran du projet <?php the_field('project_title'); ?>">
                    </figure>
                    <a class="projets__single--title" href="<?php the_permalink(); ?>" title="Voir la fiche technique du projet <?php the_field('project_title'); ?>"><?php the_field('project_title'); ?></a>
                </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </section>

<?php
    get_footer();
