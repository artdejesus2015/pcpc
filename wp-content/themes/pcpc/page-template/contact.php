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
                <div class="content-wrapper">
                    <h2 class="section-title">Send us a Message</h2>

                    <div class="form-wrapper">
                       <?php echo do_shortcode('[contact-form-7 id="4" title="Contact Form"]'); ?>
                    </div>

                </div>
            </div>

            <div class="column column-6">
                <div class="content-wrapper content-wrapper-right">
                    <h2 class="section-title">Get in Touch</h2>

                    <div class="content content-touch">
                        <div class="description">
                            <?php the_content(); ?>
                        </div>

                        <div class="row">
                            <div class="grid grid-contact">
                                <div class="column">
                                    <p><span>Phone:</span> <a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a></p>
                                    <p><span>Fax:</span> <a href="tel:<?php the_field('fax_number'); ?>"><?php the_field('fax_number'); ?></a></p>
                                </div>
                                <div class="column">
                                    <p><span>Email:</span> <a href="mailto:<?php the_field('email_address1'); ?>"><?php the_field('email_address1'); ?></a></p>
                                    <p><span>Email:</span> <a href="mailto:<?php the_field('email_address2'); ?>"><?php the_field('email_address2'); ?></a></p>
                                </div>
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