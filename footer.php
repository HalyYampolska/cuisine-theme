<footer class="footer">
    <ul class="nav">
        <li class="nav__item"><a href="<?php echo site_url(); ?>" class="nav__link">Home</a></li>
        <li class="nav__item"><a href="<?php echo site_url('/about-us'); ?>" class="nav__link">About us</a></li>
        <li class="nav__item"><a href="<?php echo site_url('/for-proposition'); ?>" class="nav__link">For propositions</a></li>
        <li class="nav__item"><a href="#" class="nav__link">Contact us</a></li>
        <li class="nav__item"><a href="#" class="nav__link">Come work with us</a></li>
    </ul>
    <p class="copyright">
        &copy; Copyright 2023 by Halina Yampolska
    </p>
</footer>

<div class="search-overlay search-overlay--active">
    <div class="search-overlay__top">
        <i class="fa fa-search search-overlay__icon" area-hidden-"true"></i>
        <input type="text" class="search-term" placeholder="What are you looking for?" id="search-form">
        <i class="fa fa-window-close search-overlay__close" area-hidden-"true"></i>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>