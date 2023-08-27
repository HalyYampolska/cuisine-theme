<?php 

get_header();

?>
<div class="hero">
    <div class="hero__image" style="background-image: url(http://ukraine-cuisine.local/wp-content/themes/cuisine-theme/img/hero.jpg)"></div>
    <div class="content-container">
        <div class="header__heading heading-primary">
            <h1 class="heading-1 heading-primary-main mb-sm">Ukrainian Cuisine</h1>
            <h3 class="heading-2 heading-primary-sub">Delicious Food and Traditions</h3>
        </div>
    </div>
</div>

<?php 

    while(have_posts()) {
        the_post();?>
  
    <div class="page-section">  

        <?php
        
        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) { ?>

            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span>
                </p>
            </div> 
             
        <?php }
        
        ?>

        <?php 
        $postWitoutChild = get_pages(array(
            'child_of' => get_the_ID()
        ));
        
        if($theParent or $postWitoutChild) {?>    
        <div class="page-links">
            <h2 class="page-links__title"><a class="page-links__title-deco" href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
            <ul class="min-list">
            <?php
                if ($theParent) {
                    $findChildrenOf = $theParent;
                } else {
                    $findChildrenOf = get_the_ID();
                }
              wp_list_pages(array(
                'title_li' => NULL, 
                'child_of' => $findChildrenOf
              ));  
            ?>
            
            </ul>
        </div>
        <?php } ?>  

        <div class="page-container">
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>  
        
    <?php }

get_footer(); 

?>