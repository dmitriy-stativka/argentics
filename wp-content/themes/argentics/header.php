<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div class="wrapper">

    <?php
        $logo = get_field('logo', 'option');
    ?>

    <header>
        <div class="container">
            <div class="header">
                <a href="/" class="header__logo">
                    <img src="<?php echo $logo;?>" alt="">
                </a>

                <div class="header__mobile">
                    <button class="burger-button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <nav class="header__nav">
                        <ul class="header__nav-list">
                            <?php
                                while (have_rows('menu', 'option')) : the_row(); ?>
                                    <?php if(have_rows('submenu', 'option')){ ?>
                                        <li class="header__nav-item">
                                            <span class="header__nav-link accordion">Services</span>
                                            <div class="hide-box panel">
                                                <ul class="hide-list">
                                                    <?php 
                                                        while (have_rows('submenu', 'option')) : the_row(); ?>
                                                            <li class="hide-list__item">
                                                                <a href="<?php echo get_sub_field('link_of_item', 'option');?>" class="hide-list__link"><?php echo get_sub_field('name_of_item', 'option');?></a>
                                                            </li>
                                                        <?php endwhile;
                                                    ?>
                                                </ul>
                                            </div>
                                        </li>
                                
                                    <?php }else{ ?>
                                        <li class="header__nav-item">
                                            <a class="header__nav-link" href="<?php echo get_sub_field('link_of_item', 'option');?>"><?php echo get_sub_field('text_of_item', 'option');?></a>
                                        </li>
                                    <?php }  ?>
                                <?php endwhile;
                            ?>
                        </ul>
                    </nav>
                    <a href="<?php echo get_field('link_of_button', 'option');?>" class="header__contact"><?php echo get_field('text_button', 'option');?></a>
                </div>

                <button class="burger-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>
        </div>
    </header>   

    <main class="site-content" role="main" id="main-content">