<?php
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();

?>

<div class="banner banner--masthead banner--home" style="background-image: url('<?php the_field('banner_image_home', 'option'); ?>');">
    <div class="l-wrap">
        <h1 class="banner__heading"><?php the_field('banner_title_home', 'option'); ?></h1>
        <div class="banner__content">
            <p><?php the_field('banner_description_home', 'option'); ?><span class="banner__verse"><?php the_field('banner_verse_home', 'option'); ?></span></p></div>
    </div>
</div>


<div class="introduction">
    <div class="l-wrap">
        <div class="possibilities possibilities--caption">
            <div class="copy copy--large">
                <h2 class="t-heading"><?php the_field('section_title_1_home', 'option'); ?></h2>
                <div class="possibilities__body copy--quote">
                    <?php the_field('section_description_1_home', 'option'); ?>
                </div>

                <div class="copy copy_possibilities">
                    <p>The Park Cities Presbyterian Church Foundation was established to support the mission of PCPC to extend the transforming presence of the kingdom of the Lord Jesus Christ in Dallas and to the world. The foundation receives gifts, grants, bequests, and other contributions to strategically fund gospel based initiatives, which leverage PCPC's ability to expand gospel ministries beyond what PCPC's operating budget can or should do</p>
                </div>
            </div>
        </div>
        <div class="possibilities possibilities--video">
            <div class="possibilities__bars">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="possibilities__box">
                <div class="possibilities__links"><?php the_field('video_description', 'option'); ?></div>
            </div>
        </div>
    </div>
</div>

<div class="two-folds">

    <?php
    $bannerleft_img = get_field('section_left_background2_home', 'option');
    // thumbnail
    $sizeleft = 'background-img';
    $bannerleft_bg = $bannerleft_img['sizes'][ $sizeleft ];

    $banneright_img = get_field('section_right_background', 'option');
    // thumbnail
    $sizeright = 'background-img';
    $banneright_bg = $banneright_img['sizes'][ $sizeright ];

    ?>

    <div class="two-folds__item two-folds__item--about" style="background-image: url('<?php echo $banneright_bg; ?>');">
        <div class="two-folds__item__wrap">
            <div class="two-folds__item__content copy">
                <h2 class="h3 t-heading"><?php the_field('section_right_title2_home', 'option'); ?></h2>
                <?php the_field('section_right_description2_home', 'option'); ?>
                <a href="<?php the_field('section_right_link2_home', 'option'); ?>" class="button button--secondary">Learn More</a></div>
        </div>
    </div>

    <div class="two-folds__item two-folds__item--purpose" style="background-image: url('<?php echo $bannerleft_bg; ?>');">
        <div class="two-folds__item__wrap">
            <div class="two-folds__item__content copy">
                <h2 class="h3 t-heading"><?php the_field('section_left_title2_home', 'option'); ?></h2>
                <?php the_field('section_left_description2_home', 'option'); ?>
                <a href="<?php the_field('section_left_link2_home', 'option'); ?>" class="button button--secondary">Learn More</a></div>
        </div>
    </div>

</div>
<div class="leadership">
    <div class="l-wrap">
        <div class="copy">
            <h2 class="t-heading"><?php the_field('section_title3_home', 'option'); ?></h2>
            <div class="description">
                <?php the_field('section_description3', 'option'); ?>
            </div>
        </div>
        <div class="leadership__list">
            <?php
            $residential_slider =  array(
                'post_type' => 'leadership',
                'post_status' => 'publish',
                'orderby' => 'id',
                'order' => 'asc',
                'posts_per_page' => -1);

            $the_query = new WP_Query( $residential_slider );
            while ( $the_query->have_posts() ) :$the_query->the_post();
                $leader_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
                ?>

                <div class="leadership__item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="leadership__image" style="background-image: url('<?php echo $leader_img[0]; ?>');">
                        </div>
                        <h3 class="h4 t-heading leadership__title"><?php the_title(); ?></h3>
                    </a>
                </div>

            <?php  endwhile; ?>

        </div>
    </div>
</div>

<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer();
