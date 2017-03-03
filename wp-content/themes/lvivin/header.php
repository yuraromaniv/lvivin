<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>
        <?php
            if ( is_home () ) {
                bloginfo('name');
            }
            elseif ( is_category() ) {
                single_cat_title(); echo " - Категорії";
            }
            elseif ( is_search() ) {
                echo 'Результати пошуку - '; bloginfo('name');
            }
            elseif ( is_tag() ) {
                echo wp_get_document_title( $sep = '', $display = true );
            }
            elseif ( is_author() ) {
                echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name') . ' - '; bloginfo('name');
            }
            else {
                echo wp_get_document_title();
            }
        ?>
    </title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/logo/lvivin.png" />
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet"> 
    <link href="https://cdn.mapkit.io/v1/infobox.css" rel="stylesheet"> 
    <?php wp_head(); ?>
</head>
<body>
    <ul id="slide-out" class="side-nav">
        <li><a href="<?php echo get_home_url(); ?>">Головна</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="<?php echo get_post_type_archive_link('excursions'); ?>">Екскурсії</a></li>
        <li><a class="waves-effect" href="<?php echo get_post_type_archive_link('bus_excursions'); ?>">Автобусні екскурсії</a></li>
        <li><a class="waves-effect" href="<?php echo get_post_type_archive_link('residences'); ?>">Проживання</a></li>
        <li><a class="waves-effect" href="<?php echo get_post_type_archive_link('places'); ?>">Куди сходити</a></li>
    </ul>
    <div id="header">
        <div class="row">
            <div class="col l3 m12 s12">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo/lvivin.svg" alt="Логотип">
                <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only">
                    <i style="font-size: 50px;" class="material-icons">menu</i>
                </a>
            </div>
            <div class="col l9"> 
                <div class="menu-list center hide-on-med-and-down">
                    <div class="menu-link center">
                        <a href="<?php echo get_home_url(); ?>">
                            <img class="menu-link-img " src="<?php echo get_template_directory_uri(); ?>/img/menu-icon/news.svg" alt="home">
                            <div>Головна</div>
                        </a>
                    </div>
                    <div class="menu-link center">
                        <a href="<?php echo get_post_type_archive_link('excursions'); ?>">
                            <img style="margin-left:12px;" class="menu-link-img" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon/excursion.svg" alt="excursion">
                            <div>Екскурсії</div>
                        </a>
                    </div>
                    <div class="menu-link center">
                        <a href="<?php echo get_post_type_archive_link('bus_excursions'); ?>">
                            <img class="menu-link-img" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon/bus.svg" alt="bus">
                            <div>Автобусні екскурсії</div>
                        </a>
                    </div>
                    <div class="menu-link center">
                        <a href="<?php echo get_post_type_archive_link('residences'); ?>">
                            <img class="menu-link-img" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon/house.svg" alt="house">
                            <div>Проживання</div>
                        </a>
                    </div>
                    <div class="menu-link center">
                        <a href="<?php echo get_post_type_archive_link('places'); ?>">
                            <img class="menu-link-img" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon/where.svg" alt="where">
                            <div>Куди сходити</div>
                        </a>
                    </div>
                    <div class="menu-link center">
                        <a href="URL">
                            <img class="menu-link-img" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon/info.svg" alt="info">
                            <div>Про нас</div>
                        </a>
                    </div>
                    <div id="button">
                        <img class="all-lang-img" src="<?php echo get_template_directory_uri(); ?>/img/lang/all-lang.svg" alt="all-lang">
                        <div id="s_panel">
                            <div class="lang">
                                <div class="lang-list"> 
                                    <a href="URL">
                                        <img class="lang-link-img" src="<?php echo get_template_directory_uri(); ?>/img/lang/ukr.svg" alt="ukr">
                                    </a>
                                </div>
                                <div class="lang-list"> 
                                    <a href="URL">
                                        <img class="lang-link-img" src="<?php echo get_template_directory_uri(); ?>/img/lang/rus.svg" alt="rus">
                                    </a>
                                </div>
                                <div class="lang-list"> 
                                    <a href="URL">
                                        <img class="lang-link-img" src="<?php echo get_template_directory_uri(); ?>/img/lang/eng.svg" alt="eng">
                                    </a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>