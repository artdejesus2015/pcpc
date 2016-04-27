<!DOCTYPE html>
<!--[if IE 7]>         <html class="site-base no-js ie9 ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="site-base no-js ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="site-base no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="site-base no-js gt-ie9" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCPC Foundation</title>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/vendors/modernizr.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 9]><div class="ie-message"><div class="bg"></div><div class="l-wrap">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true" target="_blank">activate Google Chrome Frame</a> to improve your experience.</div></div><![endif]-->

<button class="mobile-toggle">
    <span class="toggle-bar"></span>
</button>

<div class="mobile-menu">
    <?php
        $defaults = array(
            'theme_location'  => 'primary',
            'menu'            => 'Navigation Menu',
            'menu_class'      => 'menu__root'
        );
        wp_nav_menu( $defaults );
    ?>
</div>

<header class="l-header">
    <div class="l-wrap">
        <a href="<?php bloginfo('siteurl'); ?>" class="white-logo">
            <div class="brand" style="background-image: url('<?php echo the_field('header_logo', 'option'); ?>');"></div><span class="brand__text">PCPC Foundation</span>
        </a>

        <a href="<?php bloginfo('siteurl'); ?>" class="blue-logo">
            <div class="brand" style="background-image: url('<?php echo the_field('footer_logo', 'option'); ?>');"></div><span class="brand__text">PCPC Foundation</span>
        </a>

        <nav class="menu menu--primary">
            <?php

            $defaults = array(
                'theme_location'  => 'primary',
                'menu'            => 'Navigation Menu',
                'menu_class'      => 'menu__root'
            );
            wp_nav_menu( $defaults );

            ?>
        </nav>
    </div>
</header>