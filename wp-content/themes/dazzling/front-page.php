<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta property="al:ios:url" content="http://itunes.apple.com/app/id908897517" />
        <meta property="al:ios:app_store_id" content="908897517" />
        <meta property="al:ios:app_name" content="Number Cortex" />
        <meta property="al:android:url" content="http://play.google.com/store/apps/details?id=com.numbercortex.android" />
        <meta property="al:android:app_name" content="Number Cortex" />
        <meta property="al:android:package" content="com.numbercortex.android" />
        <meta property="al:web:url"
              content="http://www.numbercortex.com" />

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
                                <div id="logo_text"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">Number Cortex</a></div>
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

            <div id="numberquartomobile">
                <div id="numberquartoapplemobile">
                    <a href="http://itunes.apple.com/app/id908897517">
                        <img class="iconimagemobile" alt="Get it on the App Store" src="/images/icon_app_store.png" />
                    </a>
                </div>
                <div id="numberquartogoogleplaymobile">
                    <a href="https://play.google.com/store/apps/details?id=com.numbercortex.android">
                        <img class="iconimagemobile" alt="Get it on Google Play" src="/images/icon_google_play_mobile.png" />
                    </a>
                </div>
                <div id="numberquartomobilebanner">
                    <img src="/images/number_cortex_mobile_banner.jpg" alt="number cortex mobile banner" />    
                </div>
            </div>
            <div id="numberquartobanner">
                <div id="numberquartobannercontents">
                    <div id="number_quarto_title"><img src="/images/number_cortex_title.png" alt="number cortex title" /></div>
                    <div id="number_quarto_app_phone"><img src="/images/number_cortex_app.png" alt="number cortex app preview" /></div>
                    <div id="numberquartoapple">
                        <a href="http://itunes.apple.com/app/id908897517">
                            <img class="iconimage" alt="Get it on the App Store" src="/images/icon_app_store.png" />
                        </a>
                    </div>
                    <div id="numberquartogoogleplay">
                        <a href="https://play.google.com/store/apps/details?id=com.numbercortex.android">
                            <img class="iconimage" alt="Get it on Google Play" src="/images/icon_google_play.png" />
                        </a>
                    </div>
                </div>
            </div>


            <div id="content" class="site-content container">
                <div id="primary" class="content-area col-sm-12 col-md-12">
                    <main id="main" class="site-main" role="main">
                        <div id="appeals">
                            <div id="time" class="appeal">
                                <span class="largeIcon fa-stack fa-5x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                                </span>
                                <br />
                                <div class="appealText">
                                    Tired of long board games? Fear not, Number Cortex games are relatively short and yet challenging.
                                </div>
                            </div>
                            <div id="book" class="appeal">
                                <span class="largeIcon fa-stack fa-5x">
                                    <i class="fa fa-book fa-stack-1x"></i>
                                    <i class="fa fa-ban fa-stack-2x"></i>
                                </span>
                                <br />
                                <span class="appealText">
                                    No need to read through a manual. An interactive tutorial will take you through the game within minutes. Number Cortex is easy to learn but hard to master.
                                </span>
                            </div>
                            <div id="challenging" class="appeal">
                                <span class="largeIcon fa-stack fa-5x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-lightbulb-o fa-stack-1x fa-inverse"></i>
                                </span>
                                <br />
                                <span class="appealText">
                                    Number Cortex is challenging and intellectually stimulating. If you need a little mental exercise, this game is for you.
                                </span>
                            </div>
                            <div id="fun" class="appeal">
                                <span class="largeIcon fa-stack fa-5x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i>
                                </span>
                                <br />
                                <span class="appealText">
                                    18 unique levels of fun, especially for puzzle lovers!
                                </span>
                            </div>
                        </div>
                        <div id="overview">
                            <h1 id="gameOverviewText">Overview of Game</h1>
                            <p>Number Cortex is an original two player board game where you take turns with your opponent placing numbers on a square grid (1 ~ 17, excluding 9). However, you get to choose which number your opponent will play next. Your objective in this game is to get four in a row of a “common attribute” either horizontally, vertically, or diagonally. In other words, you are trying to line up four-in-a-row of</p>
                            <ul>
                                <li>Odds or Evens</li>
                                <li>Single digits or double digits</li>
                                <li>More attributes will be revealed as you play</li>
                            </ul>
                            <p>The trick is to carefully eliminate the numbers you cannot pass to your opponent and force your opponent to give you a winning number. Go ahead and test yourself against various levels of artificial intelligence!</p>
                        </div>
                        <div id="creditLine">
                            <p>*Apple, the Apple logo, iPad, and iPhone are trademarks of Apple Inc., registered in the U.S. and other countries. App Store is a service mark of Apple Inc.</p>
                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->


                <?php
                get_footer();
                ?>