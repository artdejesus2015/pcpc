<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
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
        <div class="content content-w">
            <div class="copy">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer();
