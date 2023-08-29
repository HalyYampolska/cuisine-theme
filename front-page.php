<?php get_header(); ?>

<div class="hero">
    <div class="hero__image" style="background-image: url(http://ukraine-cuisine.local/wp-content/themes/cuisine-theme/img/hero.jpg)"></div>
    <div class="content-container">
        <div class="header__heading heading-primary">
            <h1 class="heading-1 heading-primary-main mb-sm">Ukrainian Cuisine</h1>
            <h3 class="heading-2 heading-primary-sub">Delicious Food and Traditions</h3>
        </div>
    </div>
</div>



<!-- MENU SECTION -->
<section class="dishes"> 

<?php 
    $homepageDishes = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'group',
        'orderby' => 'title'
    ));

    while($homepageDishes->have_posts()) {
        $homepageDishes->the_post(); ?>

        <div class="dish">
            <svg class="dish__like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg>
            <img class="dish__img" src="<?php the_field('group_photo'); ?>">
            <h2 class="dish__name heading-2 heading-2--light"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>

    <?php }
    wp_reset_postdata();
    ?>

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
    <?php 
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2,
            
        ));

        while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
            <div class="topic">
            <img src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" alt="<?php the_title_attribute(); ?>" class="topic__img mb-md">
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
                <h2 class="topic__name heading-2 heading-2--dark mb-md"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="topic__text"><?php echo wp_trim_words(get_the_content(), 80); ?></p>
                <button class="btn topic__btn"><a href="<?php the_permalink(); ?>">Read more</a></button>
            </div>
        <?php } wp_reset_postdata();
    ?>
        
        
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
