<?php
/*
 * Template Name: Homepage Template
 * Description: The front page template
 */
    global $post;
    get_header();
 ?>

<div id="home" class="inner page-<?php echo $post->ID; ?>">
   <section class='video'>
       <div class='video-responsive'>
           <iframe class='background-video' width="640" height="360" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/hnp1pt8biD4?controls=0&autoplay=1&disablekb=1&enablejsapi=1&iv_load_policy=3&modestbranding=1&showinfo=0&rel=0&widgetid=1&mute=1&showinfo=0&playlist=hnp1pt8biD4&loop=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class='container'>
        </div>
    </section>
    <section class='credibility container'>
        <div>
            <div>
                <?php the_field('credibility_video'); ?>
            </div>
            <div>
                <h2><?php the_field('credibility_heading'); ?></h2>
                <?php the_field('credibility_content'); ?>
                <a href='<?php the_field('credibility_url'); ?>'>Learn more</a>
            </div>
        </div>
    </section>
    <section class='warranty container'>
        <div>
            <h2><?php the_field('warranty_heading'); ?></h2>
            <?php the_field('warranty_content'); ?>
        </div>
        <div>
            <?php $image = get_field('warranty_image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
    </section>
    <section class='testimonial container'>
        <div>
            <div>
                <?php the_field('testimonial_video'); ?>
            </div>
            <div>
                <h2><?php the_field('testimonial_heading'); ?></h2>
                <?php the_field('testimonial_content'); ?>
                <a href='<?php the_field('credibility_url'); ?>'>Learn more</a>
            </div>
        </div>
    </section>
    <section class='services container'>
        <div>
            <h2><?php the_field('services_heading'); ?></h2>
            <?php the_field('services_content'); ?>
            <a href='<?php the_field('credibility_url'); ?>'>Learn more</a>
        </div>
        <div>
            <?php $image = get_field('services_image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
    </section>
    <section class='products container'>
        <div>
            <h2><?php the_field('products_heading'); ?></h2>
            <?php the_field('products_content'); ?>
        </div>
        <div>
            <?php $image = get_field('products_image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
    </section>
    <section class='expandable-info container'>
    </section>
    <section class='expandable-info-2 container'>
    </section>
    <section class='call-to-action container'>
    </section>
</div>

<?php get_footer(); ?>