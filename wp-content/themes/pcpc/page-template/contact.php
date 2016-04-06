<?php
/**
 * Template Name: Contact Page
 */

get_header();

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

    <div class="banner banner--masthead banner--sub banner--<?php echo $post_slug;?>" style="background-image: url('<?php echo $bg_img[0]; ?>');">
        <div class="l-wrap">
            <h1 class="banner__heading"><?php the_title(); ?></h1>
            <div class="banner__content">
                <?php if( get_field('banner_description') ): ?><p>“<?php echo the_field('banner_description'); ?>” <?php if( get_field('banner_verse') ): ?><span class="banner__verse"><?php echo the_field('banner_verse'); ?></span><?php endif; ?></p><?php endif; ?>
            </div>
        </div>
    </div>

    <div class="introduction introduction-sub introduction-<?php echo $post_slug;?>">
        <div class="l-wrap">
            <div class="column column-6">
                <div class="content-wrapper content-wrapper-right">
                    <h2 class="section-title">What to do if you are interested</h2>

                    <div class="content content-touch">
                        <?php the_content(); ?>

                    </div>
                </div>
            </div>

            <div class="column column-6">


                <div class="content-wrapper">
                    <h2 class="section-title">Send us a Message</h2>

                    <div class="form-wrapper">
                        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact Form"]'); ?>
                    </div>

                </div>
            </div>

        </div>
    </div>
<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer();