<?php
/*
 * Template Name: Homepage Template
 * Description: The front page template
 */
    global $post;
    get_header();
 ?>

<div id="home" class="inner page-<?php echo $post->ID; ?>">
    <section class="main"     
            <?php $image = get_field( 'hero_image' );
            if ( !empty( $image ) ): ?>
                style="background-image:url('<?php echo $image; ?>');"
            <?php endif; ?>  
            >               
            <div class="container">
                <div class='content'>
                    <?php if( get_field('heading') ): ?>
                        <h1><?php the_field('heading'); ?></h1>
                    <?php endif; ?>
                    <?php if( get_field('sub_heading') ): ?>
                        <p><?php the_field('sub_heading'); ?></p>
                    <?php endif; ?>
                    <?php if( get_field('call_to_action') ): ?>
                        <a href='<?php the_field('call_to_action'); ?>'>Learn more</a>
                    <?php endif; ?>
                </div>
            </div>
    </section>
    <section class="introduction">
        <div class="container">
            <div class='gutter-xl narrower'>
                <?php if( get_field('intro_heading') ): ?>
                    <h2 class='gutter-bottom'><?php the_field('intro_heading'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('intro_text') ): ?>
                    <p><?php the_field('intro_text'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="ups"
    <?php $image = get_field( 'background_image' );
            if ( !empty( $image ) ): ?>
                style="background-image:url('<?php echo $image; ?>');"
            <?php endif; ?>>
        <div class="container gutter-top gutter-bottom-xl">
            <div class='gutter narrower wrapper-intro'>
                <?php if( get_field('ups_heading') ): ?>
                    <h2><?php the_field('ups_heading'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('ups_text') ): ?>
                    <p><?php the_field('ups_text'); ?></p>
                <?php endif; ?>
            </div>
            <div class='wrapper-cards'>
                <div class='card'>
                    <?php if( get_field('card_image') ): ?>
                        <div class='img-wrapper'>
                            <img src='<?php the_field('card_image'); ?>' alt='<?php the_field('card_heading'); ?>'/>
                        </div>
                    <?php endif; ?>
                    <div class='content-wrapper'>
                        <?php if( get_field('card_heading') ): ?>
                            <h4><?php the_field('card_heading'); ?></h4>
                        <?php endif; ?>
                        <?php if( get_field('card_text') ): ?>
                            <p><?php the_field('card_text'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class='card'>
                    <?php if( get_field('card_image') ): ?>
                        <div class='img-wrapper'>
                            <img src='<?php the_field('card_image'); ?>' alt='<?php the_field('card_heading'); ?>'/>
                        </div>
                    <?php endif; ?>
                    <div class='content-wrapper'>
                        <?php if( get_field('card_heading') ): ?>
                            <h4><?php the_field('card_heading'); ?></h4>
                        <?php endif; ?>
                        <?php if( get_field('card_text') ): ?>
                            <p><?php the_field('card_text'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class='card'>
                    <?php if( get_field('card_image') ): ?>
                        <div class='img-wrapper'>
                            <img src='<?php the_field('card_image'); ?>' alt='<?php the_field('card_heading'); ?>'/>
                        </div>
                    <?php endif; ?>
                    <div class='content-wrapper'>
                        <?php if( get_field('card_heading') ): ?>
                            <h4><?php the_field('card_heading'); ?></h4>
                        <?php endif; ?>
                        <?php if( get_field('card_text') ): ?>
                            <p><?php the_field('card_text'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if( get_field('cta') ): ?>
        <section class='cta-banner gutter-xl'>
            <div class='container'>
                <h3 class='narrower'><?php the_field('cta'); ?></h3>
                <a href='#contact'>Contact us to find out more</a>
            </div>
        </section>
    <?php endif; ?>
    <section class="testimonials">
        <div class="container">
            <div class='gutter-xl'>
                <?php if( get_field('testimonials_heading') ): ?>
                    <h2 class='text-center gutter-bottom'><?php the_field('testimonials_heading'); ?></h2>
                <?php endif; ?>
                <div class='tesimonial'>
                    <?php if( get_field('customer_image') ): ?>
                        <div class='img-wrapper'>
                            <img src='<?php the_field('customer_image'); ?>' alt='customer'>
                        </div>
                    <?php endif; ?>
                    <div class='quote'>
                        <h4><?php the_field('quote_title'); ?></h4>
                        <p><?php the_field('quote_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services" >
        <div class="container">
            <div class='gutter-top-xl narrower'>
                <?php if( get_field('services_heading') ): ?>
                    <h2><?php the_field('services_heading'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('services_content') ): ?>
                    <p><?php the_field('services_content'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="products gutter-bottom-xl" >
        <div class="container">
            <div class='row gutter-top'>

                    <img src='http://solarunion.test/wp-content/uploads/2021/09/solar-panels-header.png'/>
           
                <div class='feature'>
                    <h3>Longi Panel</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class='row gutter-top'>
             
                    <img src='http://solarunion.test/wp-content/uploads/2021/09/6b046a4f31b9ab5c398e9c25d065d112.png'/>
                
                <div class='feature'>
                    <h3>Sungrow inverter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>