<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title><?php wp_title(''); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <?php wp_head(); ?>
    </head>

    <body>
        <header id="header">
            <?php echo get_custom_logo(); ?> <!-- show logo -->
            <h2><?php echo bloginfo('description'); ?></h2> <!-- show title slogan -->
            <nav id="navigation">
            <?php wp_nav_menu(array('theme_location' => 'main')); ?> <!-- show menu -->
            </nav>
        </header>

        <div id="wrap">
            <section id="content">
            </section>

            <aside id="sidebar">
            </aside>
        </div>

        <footer id="footer">
        </footer>

        <?php wp_footer(); ?>
        </body>
</html