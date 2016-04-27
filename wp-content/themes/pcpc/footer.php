<div class="newsletter">
    <div class="l-wrap">
        <h3><?php the_field('news_letter_title', 'option'); ?></h3>
        <div class="form form--muted">
            <?php echo do_shortcode('[contact-form-7 id="55" title="News Letter"]'); ?>
        </div>
    </div>

    <div class="newsletter__bars">
        <span class="horizontal-bar horizontal-bar1"></span>
        <span class="horizontal-bar horizontal-bar2"></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

</div>

<div class="l-footer">
    <div class="l-footer__separator"></div>
    <div class="l-wrap">
        <a href="<?php bloginfo('siteurl'); ?>" class="footer-logo-wrap">
            <div class="footer-brand" style="background-image: url('<?php echo the_field('footer_logo', 'option'); ?>');"></div><span class="brand__text">PCPC Foundation</span></a>
        <div class="footer-copy">
            <nav class="menu menu--secondary">
                <?php

                $defaults = array(
                    'theme_location'  => 'primary',
                    'menu'            => 'Navigation Menu',
                    'menu_class'      => 'menu__root'
                );
                wp_nav_menu( $defaults );

                ?>
            </nav>
            <div class="copyright"><?php echo the_field('footer_text', 'option'); ?></div>
        </div>

        <ul class="social-media">
            <li><a href="#" class="icon1"><span class="icon-facebook"></span></a></li>
            <li><a href="#" class="icon2"><span class="icon-twitter"></span></a></li>
            <li><a href="#" class="icon3"><span class="icon-youtube"></span></a></li>
        </ul>
    </div>
</div>

<?php wp_footer(); ?>
<script type="text/javascript" src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/vendors/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/main.js"></script>

</body>
</html>
