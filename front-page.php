<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        
    </head>
<body>

<header class="header">

<div class="navigation">
    <!-- SEARCH -->
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
    <!-- NAVIGATION -->
    <input type="checkbox" class="sidebar__checkbox" id="navi-toggle">
    <label for="navi-toggle" class="sidebar__button">
        <span class="sidebar__icon">&nbsp;</span>
    </label>
    <div class="sidebar__background">&nbsp;</div>
    <nav class="sidebar__nav">
        <ul class="sidebar__list">
            <li class="sidebar__item"><a href="#" class="sidebar__link">About us</a></li>
            <li class="sidebar__item"><a href="#" class="sidebar__link">Create perfect menu</a></li>
            <li class="sidebar__item"><a href="#" class="sidebar__link">Video curses</a></li>
            <li class="sidebar__item"><a href="#" class="sidebar__link">Read about cusine</a></li>
            <li class="sidebar__item"><a href="#" class="sidebar__link">Come work with us</a></li>
        </ul>
    </nav>


</div>
<div class="header__heading heading-primary">
    <h1 class="heading-1 heading-primary-main mb-sm">Ukraine cuisine</h1>
    <h3 class="heading-2 heading-primary-sub ">create your oun menu with us</h3>
</div>
</header>

