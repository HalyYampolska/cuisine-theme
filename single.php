<?php get_header();

    while(have_posts()) {
        the_post(); ?> 
         
            <div class="hero">
            <div class="hero__image" style="background-image: url(http://ukraine-cuisine.local/wp-content/themes/cuisine-theme/img/hero.jpg)"></div>
            <div class="content-container">
                <div class="header__heading heading-primary">
                    <h1 class="heading-1 heading-primary-main mb-sm"><?php the_title(); ?></h1>
                    <h3 class="heading-2 heading-primary-sub">Subtitle</h3>
                </div>
            </div>
            </div>

            <div class="page-section">
                <div class="metabox metabox--position-up metabox--with-home-link">
                    <p>
                        <a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Return to Blog </a>
                        <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> 
                        in <?php echo get_the_category_list(', '); ?> </span>
                    </p>
                </div> 
            </div>

            <div class="page-section blog-page"> 
                    <?php the_content(); ?>
            </div>

    <?php }

get_footer(); ?>