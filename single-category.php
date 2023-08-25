<?php 

get_header();

?>

<div class="hero">
    <div class="hero__image" style="background-image: url(http://ukraine-cuisine.local/wp-content/themes/cuisine-theme/img/hero.jpg)"></div>
    <div class="content-container">
        <div class="header__heading heading-primary">
            <h1 class="heading-1 heading-primary-main mb-sm"><?php the_title(); ?></h1>
            <h3 class="heading-2 heading-primary-sub"><?php echo get_the_excerpt(); ?></h3>
        </div>
    </div>
</div>

        
<div class="page-section metabox-categories">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
            <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('category'); ?>"><i class="fa fa-home" aria-hidden="true"></i>All Categories</a><span class="metabox__main"><?php the_title(); ?></span>
        </p>
    </div> 
</div>        
              

<section class="dishes"> 

<?php 
    $relatedRecipe = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'recipe',
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
            array(
               'key' => 'related_category',
               'compare' => 'LIKE',
               'value' => '"' . get_the_ID() . '"' 
            )
        )
    ));

    while($relatedRecipe->have_posts()) {
        $relatedRecipe->the_post(); ?>

        <div class="dish">
            <svg class="dish__like" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
            </svg>
            <img class="dish__img" src="<?php the_field('recipe_photo'); ?>">
            <h2 class="dish__name heading-2 heading-2--light"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>

    <?php }
    wp_reset_postdata();
    ?>

</section>

<?php

get_footer();

?>