<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id(11), 'full', false, '' );
$leader_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );;

if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

    <div class="banner banner--masthead banner--sub banner--<?php echo $post_slug;?>" style="background-image: url('<?php echo $bg_img[0]; ?>');">
        <div class="l-wrap">
            <h1 class="banner__heading">Leadership</h1>
            <div class="banner__content">
                <?php if( get_field('banner_description', 11) ): ?><p>“<?php echo the_field('banner_description', 11); ?>” <?php if( get_field('banner_verse', 11) ): ?><span class="banner__verse"><?php echo the_field('banner_verse', 11); ?></span><?php endif; ?></p><?php endif; ?>
            </div>
        </div>
    </div>

    <div class="introduction introduction-sub introduction-sub-leader introduction-<?php echo $post_slug;?>">
        <div class="l-wrap">

            <div class="content">
                <div class="column">
                    <div class="grid-item">
                        <div class="grid-item-img" style="background-image: url('<?php echo $leader_img[0]; ?>')">
                            <div class="grid-item-description">
                                <h3 class="leadership__name"><?php the_title(); ?></h3>
                                <?php if(get_field('job_position')): ?><p class="leadership__position"><?php the_field('job_position'); ?></p><?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="description">
                    <div class="copy">
                        <?php the_content(); ?>
                    </div>

                </div>

            </div>
        </div>
    </div>

<?php endwhile; else : ?>
<?php endif; ?>


<?php get_footer(); ?>
