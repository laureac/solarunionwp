<?php get_header(); ?>

<div id='theme-content'>

    <section class='home-video'>
    <?php if( get_field('heading') ): ?>
        <h2><?php the_field('heading'); ?></h2>
    <?php endif; ?>
    <?php if( get_field('image') ): ?>
        <img src='<?php the_field('image'); ?>'/>
    <?php endif; ?>
        <?php get_template_part('partials/section', 'content');?>
    </section>
</div>


<?php get_footer(); ?>