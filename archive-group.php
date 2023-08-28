<?php
get_header();
?>

<div class="hero">
    <div class="hero__image" style="background-image: url(http://ukraine-cuisine.local/wp-content/themes/cuisine-theme/img/hero.jpg)"></div>
    <div class="content-container">
        <div class="header__heading heading-primary">
            <h1 class="heading-1 heading-primary-main mb-sm">Menu</h1>
            <h3 class="heading-2 heading-primary-sub"><?php the_archive_description(); ?></h3>
        </div>
    </div>
</div>


<section class="dishes"> 

<?php 
    $homepageDishes = new WP_Query(array(
        'post_per_page' => 8,
        'post_type' => 'group'
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


<section class="pagination heading-3">
    <?php echo paginate_links(); ?>
</section>

<?php
get_footer();
?>
