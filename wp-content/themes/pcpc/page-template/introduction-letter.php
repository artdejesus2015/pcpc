<?php
/**
 * Template Name: Introduction Letter Page
 */

get_header();

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

    <div class="banner banner--masthead banner--sub banner--introduction-letter" style="background-image: url('<?php echo $bg_img[0]; ?>');">
        <div class="l-wrap">
            <h1 class="banner__heading"><?php the_title(); ?></h1>
            <div class="banner__content">
                <?php if( get_field('banner_description') ): ?><p>“<?php echo the_field('banner_description'); ?>” <?php if( get_field('banner_verse') ): ?><span class="banner__verse"><?php echo the_field('banner_verse'); ?></span><?php endif; ?></p><?php endif; ?>
            </div>
        </div>
    </div>

    <div class="introduction introduction-sub introduction-letter">
        <div class="l-wrap">
            <div class="col-md-8">
                <div class="content content-w">
                    <div class="copy">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar-letter">
                    <div class="logo-wrap">
                        <img src="<?php echo the_field('footer_logo', 'option'); ?>">
                    </div>

                    <div class="sidebar-content">
                        <div class="sidebar-group">
                            <h1 class="sidebar-title">President</h1>
                            <div class="sidebar-list">
                                <p>Dr. Peter V. Deison</p>
                            </div>
                            <h1 class="sidebar-title">Board of Trustees</h1>
                            <div class="sidebar-list">
                                <p>Tommy Bain</p>
                                <p>Bill dunlap</p>
                                <p>Will Francis</p>
                                <p>Sara Lee Gardner</p>
                                <p>Harry Joe</p>
                                <p>Robert McCamey</p>
                                <p>Robert McCulloch</p>
                                <p>Jim Stroud</p>
                                <p>Keith Waggoner</p>
                            </div>
                        </div>

                        <div class="sidebar-group bar-bottom">
                            <div class="sidebar-list">
                                <p>4124 Oak Lawn Avenue</p>
                                <p>DALLAS, TEXAS 75219</p>
                                <p>214-224-2739</p>
                                <p>FAX 214-224-2799</p>
                                <p>www.pcpc.org</p>
                                <p>PETE.DEISON@PCPC.ORG</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer();