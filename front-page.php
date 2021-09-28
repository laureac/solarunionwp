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
                <div class='awards-logos gutter-top'>
                    <img src='http://solarunion.test/wp-content/uploads/2021/09/clean-energy-council-logo.png.png'/>
                    <img src='http://solarunion.test/wp-content/uploads/2021/09/clean-energy-council-logo.png.png'/>
                    <img src='http://solarunion.test/wp-content/uploads/2021/09/clean-energy-council-logo.png.png'/>
                </div>
            </div>
        </div>
    </section>
    <section id='warranty' class="ups"
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
                        <a href='#project1'>See related project</a>
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
                        <a href='#project1'>See related project</a>
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
                        <a href='#project1'>See related project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id='services' class="services" >
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
    <section id='products' class="products gutter-xl" >
        <div class="container">
            <div class='row'>
                <div class='featured-items tab'>

                        <button class="tablinks h3" onclick="window.openImg(event, '1')">6.1 kWh</button>
                        <button class="tablinks h3" onclick="openImg(event, '2')">12.5 kWh</button>
                        <button class="tablinks h3" onclick="openImg(event, '3')">18.4 kWh</button>
                        <button class="tablinks h3" onclick="openImg(event, '3')">24.1 kWh</button>

                </div>
                <div id="1" class="tabcontent" style='display: block'>
                    <img src='http://solarunion.test/wp-content/uploads/2021/09/images.jpg'/>
                </div>
                <div id="2" class="tabcontent">
                    <img src='http://solarunion.test/wp-content/uploads/2021/09/solar_permit_site_plan__36619.1576799066-5.png'/>
                </div>
                <!-- <div class='feature'>

                <img src='http://solarunion.test/wp-content/uploads/2021/09/solar-panels-header.png'/>
                <div class='featured-items'>
                    <p>Feature</p>
                    <p>Feature</p>
                    <p>Feature</p>
                </div>
                    <h3>Longi Panel</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div> -->
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

    <section class="parallax">
        <div class="parallax-image">
            <img src="http://solarunion.test/wp-content/uploads/2021/09/science-in-hd-yqEJ8HQ8y2o-unsplash-1-scaled.jpg" />
            <div class="container" id='project1'>    
                <h3>Project 1</h3>
            </div>
        </div>
        <div class="parallax-image">
            <img src="http://solarunion.test/wp-content/uploads/2021/09/sungrow-emea-VC-m6ULjJ6Y-unsplash-1-scaled.jpg" />
            <div class="container">    
                <h3>Project 2</h3>
            </div>
        </div>
        <div class="parallax-image">
            <img src="http://solarunion.test/wp-content/uploads/2021/09/science-in-hd-yqEJ8HQ8y2o-unsplash-1-scaled.jpg" />
            <div class="container">    
                <h3>Project 3</h3>
            </div>
        </div>
    </section>
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
    <section class='contact text-center gutter-xl'>
        <div class="container">
            <h2>Contact Us</h2>
            <div class='icons gutter-top'>
                <div class='icon'>
                    <?php get_template_part('assets/img' , 'phone'); ?>
                    <p>000000</p>
                </div>
                <div  class='icon'>
                    <?php get_template_part('assets/img' , 'envelope'); ?>
                    <p>solarunionau@gmail.com</p>
                </div>
                <div  class='icon'>
                    <?php get_template_part('assets/img' , 'pin'); ?>
                    <p>222 somewhere street</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>