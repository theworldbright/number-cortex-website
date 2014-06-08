<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <!-- favicon -->

        <?php if (of_get_option('custom_favicon')) { ?>
            <link rel="icon" href="<?php echo of_get_option('custom_favicon'); ?>" />
        <?php } ?>

<!--[if IE]><?php if (of_get_option('custom_favicon')) { ?><link rel="shortcut icon" href="<?php echo of_get_option('custom_favicon'); ?>" /><?php } ?><![endif]-->

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">

            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <?php if (get_header_image() != '') : ?>

                            <div id="logo">
                                <img src="<?php header_image(); ?>"  height="58" width="58" alt="<?php bloginfo('name'); ?>"/>
                                <div id="logo_text"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">Number Quarto</a></div>
                            </div><!-- end of #logo -->

                        <?php endif; // header image was removed ?>

                        <?php if (!get_header_image()) : ?>

                            <div id="logo">
                                <span class="site-name"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></span>
                            </div><!-- end of #logo -->

                        <?php endif; // header image was removed (again) ?>

                    </div>
                    <?php dazzling_header_menu(); ?>
                </div>
            </nav><!-- .site-navigation -->