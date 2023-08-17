<?php 

get_header();

    while(have_posts()) {
        the_post();?>
  
    <div class="page-section">  

        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
            <a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main">Our History</span>
            </p>
        </div>

        <div class="page-links">
            <h2 class="page-links__title"><a class="page-links__title-deco" href="#">About Us</a></h2>
            <ul class="min-list">
            <li class="current_page_item"><a class="page-links__title-deco-1" href="#">Our Contact</a></li>
            <li class="current_page_item"><a class="page-links__title-deco-1" href="#">Work with Us</a></li>
            </ul>
        </div>    

        <div class="page-container">
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>  
        
    <?php }

get_footer(); 

?>