<?php
get_header();
?>

<div class="hero">
    <div class="hero__image" style="background-image: url(http://ukraine-cuisine.local/wp-content/themes/cuisine-theme/img/hero.jpg)"></div>
    <div class="content-container">
        <div class="header__heading heading-primary">
        <h1 class="heading-1 heading-primary-main mb-sm"><?php the_archive_title(); ?></h1>
            <h3 class="heading-2 heading-primary-sub"><?php the_archive_description(); ?></h3>
        </div>
    </div>
</div>

<section class="myBlog">
<div class="blog-container">
        <div class="row">
            <?php
            $count = 0;
            

            while (have_posts()) {
                the_post();
                $count++;

                if ($count == 1) {
                    echo '<div class="row">';
                }
                ?>
                    <div class="col">
                        <div class="topic">
                        <img class="topic__img mb-md"src="<?php the_post_thumbnail(); ?>">
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

                        <h2 class="topic__name heading-2 heading-2--dark mb-md">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        
                        <div class="topic topic__text"><?php the_excerpt(); ?></div>
                        
                        <button class="btn topic__btn"><a href="<?php the_permalink(); ?>">Read more</a></button>
                    </div>
                </div>
                <?php
                if ($count % 2 == 0 || $count == $wp_query->post_count) {
                    echo '</div>'; 
                }

                if ($count % 2 == 0) {
                    echo '</div><div class="row">';
                }
            }
            ?>
        </div>
    
        </div>        
    </section>

<section class="pagination heading-3">
    <?php echo paginate_links(); ?>
</section>

<?php
get_footer();
?>

