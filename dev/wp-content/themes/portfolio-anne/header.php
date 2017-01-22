<!DOCTYPE html>
<html lang="fr">
    <head>
        <script src="https://use.fontawesome.com/a0c221e969.js"></script>
        <meta charset="utf-8">
        <meta name="descritpion" content="Bienvenue sur le portfolio de Anne Remacle, étudiante en 3e année en Techniques Infographiques option Web à la HEPL.">
        <meta name="keywords" content="portfolio, web, Anne Remacle" />
        <meta author="Anne-Remacle">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script src="<?php echo get_template_directory_uri() . '/build/script/main.js'; ?>"></script>

        <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri() . '/build/css/styles.css'; ?>" />
        <title>Portfolio online de Anne Remacle</title>
    </head>
    <body>
        <?php if(is_front_page()): ?>
            <header class="header">
                <h1 class="sro" role="heading" aria-level="1"><?php bloginfo('name'); ?></h1>
                <a data-aos="fade-up" href="<?php echo get_home_url(); ?>" title="Retour à la page d'acceuil du portfolio de Anne Remacle" class="header__logo">Accueil</a>

                <nav data-aos="fade-up" class="header__nav">
                    <?php wp_nav_menu( array(
    					'theme-location' => 'first-nav' ) ); ?>
            		<?php wp_reset_query(); ?>
                </nav>
            </header>
        <?php else: ?>
            <header class="second-header">
                <h1 class="sro" role="heading" aria-level="1"><?php bloginfo('name'); ?></h1>
                <a href="<?php echo get_home_url(); ?>" title="Retour à la page d'acceuil du portfolio de Anne Remacle" class="second-header__logo">Accueil</a>

                <nav class="second-header__nav">
                    <?php wp_nav_menu( array(
    					'menu' => "header",
    					'theme-location' => 'main-nav' ) ); ?>
            		<?php wp_reset_query(); ?>
                </nav>

            </header>
        <?php endif; ?>
