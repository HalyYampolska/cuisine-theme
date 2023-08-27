<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <?php wp_head(); ?>
        
    </head>
<body <?php body_class(); ?>>

<header class="header">


<div class="search">
    <span class="js-search-trigger navigation__search"><i class="fa fa-search" aria-hidden="true"></i></span>
</div>
    
    <!-- SEARCH 
    <div class="navigation__search" id="search">
        <div id="handle">
            <div id="circle">
                <form method="get" action="" id="form" class="form">
                    <input type="text" name="q" id="search-input" placeholder="Search" autocomplete="off"
                        required>
                </form>
                <div id="r-btn"></div>
            </div>
            <div id="c-btn"></div>
            <div id="init-button"></div>
            <input type="submit" id="submit-button" form="form">
        </div>
    </div>
    -->
    <!-- NAVIGATION -->
<div class="navigation">
    <input type="checkbox" class="sidebar__checkbox" id="navi-toggle">
    <label for="navi-toggle" class="sidebar__button">
        <span class="sidebar__icon">&nbsp;</span>
    </label>
    <div class="sidebar__background">&nbsp;</div>
    <nav class="sidebar__nav">
        <ul class="sidebar__list">
            <li class="sidebar__item"><a href="<?php echo site_url(); ?>" class="sidebar__link">Home</a></li>
            <li class="sidebar__item"><a href="<?php echo site_url('/about-us'); ?>" class="sidebar__link">About us</a></li>
            <li class="sidebar__item"><a href="#" class="sidebar__link" target="_blank">Resepies</a></li>
            <li class="sidebar__item"><a href="<?php echo site_url('/blog'); ?>" class="sidebar__link">Blog</a></li>
            <li class="sidebar__item"><a href="<?php echo site_url('/for-proposition'); ?>" class="sidebar__link">Come work with us</a></li>
        </ul>
    </nav>
</div>
    
</header>

