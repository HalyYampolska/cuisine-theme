<?php 

get_header();

?>

<div class="hero">
    <div class="hero__image" style="background-image: url(<?php the_field('recipe_photo'); ?>)"></div>
    <div class="content-container">
        <div class="header__heading heading-primary">
            <h1 class="heading-1 heading-primary-main mb-sm"><?php the_title(); ?></h1>
        </div>
    </div>
</div>

<div class="page-section recire-grid">

<div class="recire-description">
    <p>
    <?php echo get_the_excerpt(); ?>
    </p>
</div>
<h2 class="heading-2 heading-2--dark">Ingredients</h2>


<div class="ingredients">
    <ul>
        <li><label><input type="checkbox" class="checkbox"> water - 1.5-2 liters</label></li>
        <li><label><input type="checkbox" class="checkbox"> pork or beef on the bone - 400 g</label></li>
        <li><label><input type="checkbox" class="checkbox"> potatoes - 4 pcs (medium)</label></li>
        <li><label><input type="checkbox" class="checkbox"> beets - 2 pcs (small)</label></li>
        <li><label><input type="checkbox" class="checkbox"> carrot - 1 pc</label></li>
    </ul>
</div>

<div>
    <h2 class="heading-2 heading-2--dark">Lets do it!</h2>
</div>

<img class="recipe-photo" src="<?php the_field('recipe_photo'); ?>" alt="">

<div class="instruction">
    <h2 class="heading-2 heading-2--dark">Step by Step</h2>
</div>
<div class="steps">
    <ul>
        <?php
            $steps = the_content();
            if ($steps) {
                foreach ($steps as $index => $step) {
                    echo '<li>' . esc_html($step) . '</li>';
                }
            }
        ?>
    </ul>
</div>
    <h3 class="heading-3">Important or just funny fact for you</h3>
<div>
    <p>
    <?php the_field('important_info'); ?>
    </p>
</div>  

<button class="btn btn-recipe"><a href="http://ukraine-cuisine.local/groups/">Back to menu</a></button>

</div>  
 
</div>



<?php

get_footer();

?>