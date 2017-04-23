<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="<?= get_stylesheet_uri() ?>" media="screen" rel="stylesheet" type="text/css"/>
    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://feeds.feedburner.com/JohnResig" />
    <?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
    <div id="head" class="other">
        <div class="wrap">
            <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container_class' => 'nav',
                'depth' => 1
            )); ?>
            <div class="side">
                <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    echo '<a href="/about/" class="logo">';
                    the_custom_logo();
                    echo '</a>';
                }
                ?>
                <div class="text">
                    <span class="name"><?php bloginfo('name'); ?></span><br/>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'contact-menu',
                        'container' => '',
                        'menu_class' => 'contact-menu',
                        'depth' => 1
                    )); ?>
                </div>
            </div>
        </div>
    </div>
    <div id="wrap">
        <div id="body">
            <div class="wrap">
