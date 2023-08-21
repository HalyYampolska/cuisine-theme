<?php get_header(); ?>

<div class="hero">
    <div class="hero__image" style="background-image: url(http://ukraine-cuisine.local/wp-content/themes/cuisine-theme/img/hero.jpg)"></div>
    <div class="content-container">
        <div class="header__heading heading-primary">
            <h1 class="heading-1 heading-primary-main mb-sm">Ukrainian Cuisine</h1>
            <h3 class="heading-2 heading-primary-sub">Subtitle</h3>
        </div>
    </div>
</div>



<!-- MENU SECTION -->
<section class="dishes"> 
        <div class="dish">
            <svg class="dish__like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg>
            <img class="dish__img" src="<?php echo get_template_directory_uri(); ?>/img/soups.jpg" alt="soup">
            <h2 class="dish__name heading-2">Soups</h2>
        </div>

        <div class="dish">
            <svg class="dish__like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/meat.jpg" alt="meat" class="dish__img">
            <h2 class="dish__name heading-2">Meat dishes</h2>
        </div>

        <div class="dish">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main_course.jpg" alt="main-course" class="dish__img">
            <svg class="dish__like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg>
            <h2 class="dish__name heading-2">Main course</h2>
        </div>

        <div class="dish">
            <img src="<?php echo get_template_directory_uri(); ?>/img/appetizer.jpg" alt="appetizer" class="dish__img">
            <svg class="dish__like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg>
            <h2 class="dish__name heading-2">Appetizer</h2>
        </div>

        <div class="dish">
            <img src="<?php echo get_template_directory_uri(); ?>/img/dessert.jpg" alt="dessert" class="dish__img">
            <svg class="dish__like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg>
            <h2 class="dish__name heading-2">Dessert</h2>
        </div>

        <div class="dish">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bread.jpg" alt="bread" class="dish__img">
            <svg class="dish__like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg>
            <h2 class="dish__name heading-2">Bread</h2>
        </div>

        <div class="dish">
            <img src="<?php echo get_template_directory_uri(); ?>/img/beverages.jpg" alt="beverages" class="dish__img">
            <svg class="dish__like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg>
            <h2 class="dish__name heading-2">Beverages</h2>
        </div>

        <div class="dish">
            <img src="<?php echo get_template_directory_uri(); ?>/img/alcohol.jpg" alt="alcohol" class="dish__img">
            <svg class="dish__like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg>
            <h2 class="dish__name heading-2">Alcohol</h2>
        </div>
    </section>

    <!-- VLOG SECTION -->
    <div class="vlog">
    <div class="vlog__video">
        <video class="vlog__video--1" autoplay muted loop>
            <source src="<?php echo get_template_directory_uri(); ?>/img/vlog-1.mp4" type="video/mp4">
            You browser is not supported!
        </video>
        <video class="vlog__video--2" autoplay muted loop>
            <source src="<?php echo get_template_directory_uri(); ?>/img/vlog-2.mp4" type="video/mp4">
            You browser is not supported!
        </video>
    </div>
    <div class="vlog__content">

        <h3 class="heading-3 mb-sm">Step by Step</h3>
        <h2 class="heading-2 heading-2--dark mb-md">Learn to cook delicious Ukrainian dishes</h2>
        <p class="vlog__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
        </p>
        <button class="btn">Go to YouTube</button>
    </div>
    </div>

    <!-- BLOG SECTION -->
    <section class="myBlog">
        <div class="topic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog-1.jpg" alt="" class="topic__img mb-md">
            <div class="topic__star mb-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </div>
            <h2 class="topic__name heading-2 heading-2--dark mb-md">Massa id neque aliquam vestibulum</h2>
            <p class="topic__text">Vestibulum sed arcu non odio euismod lacinia at quis risus. Justo eget magna
                fermentum iaculis eu. Euismod in pellentesque massa placerat duis. Diam quam nulla porttitor massa id
                neque aliquam vestibulum morbi. Tristique senectus et netus et malesuada fames ac. Est lorem ipsum dolor
                sit. Nunc eget lorem dolor sed viverra. Facilisi nullam vehicula ipsum a arcu cursus vitae congue
                mauris. Vulputate enim nulla aliquet porttitor lacus luctus accumsan. Fermentum iaculis eu non diam
                phasellus vestibulum. Dolor purus non enim praesent elementum. Turpis in eu mi bibendum neque egestas
                congue quisque.</p>
            <button class="btn topic__btn">Read more</button>
        </div>
        <div class="topic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog-2.jpg" alt="" class="topic__img mb-md">
            <div class="topic__star mb-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-half" viewBox="0 0 16 16">
                    <path
                        d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                </svg>
            </div>
            <h2 class="topic__name heading-2 heading-2--dark mb-md">Elementum curabitur vitae nunc sed velit</h2>
            <p class="topic__text">Amet luctus venenatis lectus magna fringilla urna. Urna condimentum mattis
                pellentesque id nibh. Mauris augue neque gravida in fermentum et sollicitudin ac. Amet risus nullam eget
                felis eget. Consectetur a erat nam at lectus urna duis. Arcu bibendum at varius vel pharetra vel turpis
                nunc eget. Vel risus commodo viverra maecenas accumsan lacus vel. Mollis aliquam ut porttitor leo a diam
                sollicitudin. Bibendum enim facilisis gravida neque convallis a cras. Massa id neque aliquam vestibulum.
                Nisi porta lorem mollis aliquam ut porttitor. Amet tellus cras adipiscing enim eu turpis egestas.</p>
            <button class="btn topic__btn">Read more</button>
        </div>
    </section>

    <!-- GALLERY -->
    <section class="gallery">
        <figure class="gallery__item gallery__item--1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-1.jpg" alt="Gallery image 1" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-2.jpg" alt="Gallery image 2" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-3.jpg" alt="Gallery image 3" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-4.jpg" alt="Gallery image 4" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-5.jpg" alt="Gallery image 5" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-6.jpg" alt="Gallery image 6" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--7">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-7.jpg" alt="Gallery image 7" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--8">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-8.jpg" alt="Gallery image 8" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--9">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-9.jpg" alt="Gallery image 1" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--10">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-10.jpg" alt="Gallery image 10" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--11">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-11.jpg" alt="Gallery image 11" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-12.jpg" alt="Gallery image 12" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--13">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-13.jpg" alt="Gallery image 13" class="gallery__img">
        </figure>
        <figure class="gallery__item gallery__item--14">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gal-14.jpg" alt="Gallery image 14" class="gallery__img">
        </figure>
    </section>
<?php
get_footer(); ?>
