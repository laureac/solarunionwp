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
                    <?php if( get_field('hero_heading') ): ?>
                        <h1><?php the_field('hero_heading'); ?></h1>
                    <?php endif; ?>
                    <?php if( get_field('hero_sub_heading') ): ?>
                        <p class='narrower'><?php the_field('hero_sub_heading'); ?></p>
                    <?php endif; ?>
                    <?php if( get_field('hero_cta') ): ?>
                        <a href='<?php the_field('hero_cta'); ?>'>Learn more</a>
                    <?php endif; ?>
                </div>
            </div>
    </section>
    <section class='items gutter'>
        <div class='container'>
            <h4>UPS</h4>
            <h4>USP</h4>
            <h4>USP</h4>
        </div>
    </section>
    <section class="introduction">
        <div class="container">
            <div class='gutter-xl wrapper'>
                <?php if( get_field('intro_heading') ): ?>
                    <h2 class='gutter-bottom'><?php the_field('intro_heading'); ?></h2>
                <?php endif; ?>
                <div class='content-wrapper'>
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
        </div>
    </section>
    <section class='gutter blocks-image-text'>
        <div class='block'>
            <div class='text-wrapper'>
                <p class='smallHeading'>Power efficiency</p>
                <h2><?php the_field('card_heading'); ?></h2>
                <p><?php the_field('card_text'); ?></p>
                <a href='#project1'>Learn more about it</a>
            </div>
            <div class='img-wrapper'>
                <img src='/wp-content/uploads/2021/10/sol.png' alt='<?php the_field('card_heading'); ?>'/>
            </div>
        </div>
        <div class='block'>
            <div class='text-wrapper'>
                <p class='smallHeading'>Reliable design</p>
                <h2><?php the_field('card_heading'); ?></h2>
                <p><?php the_field('card_text'); ?></p>
                <a href='#project1'>Learn more about it</a>
            </div>
            <div class='img-wrapper'>
                <img src='<?php the_field('card_image'); ?>' alt='<?php the_field('card_heading'); ?>'/>
            </div>
        </div>
        <div class='block'>
            <div class='text-wrapper'>
                <p class='smallHeading'>Quality And Warranty</p>
                <h2><?php the_field('card_heading'); ?></h2>
                <p><?php the_field('card_text'); ?></p>
                <a href='#project1'>Learn more about it</a>
            </div>
            <div class='img-wrapper'>
                <img src='/wp-content/uploads/2021/10/sol.png' alt='<?php the_field('card_heading'); ?>'/>
            </div>
        </div>
    </section>
    <!-- <section id='warranty' class="multiple-posts bg-third-w-to-b">
        <div class="container gutter-top gutter-bottom-xl">
            <div class='gutter narrower wrapper-intro'>
                <?php if( get_field('services_heading') ): ?>
                    <h2><?php the_field('services_heading'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('services_text') ): ?>
                    <p><?php the_field('services_text'); ?></p>
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
    </section> -->
    <section id='services' class="services" >
        <div class="container">
            <div class='gutter-top-xl wrapper'>
                <?php if( get_field('products_heading') ): ?>
                    <h2><?php the_field('products_heading'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('products_content') ): ?>
                    <p><?php the_field('products_content'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section id='products' class="products gutter-xl" >
        <div class="container">
            <div class='row gutter'>
                <div class='featured-items tab'>

                        <button class="tablinks h3 active" onclick="window.openImg(event, '1')">6.1 kWh</button>
                        <button class="tablinks h3" onclick="openImg(event, '2')">12.5 kWh</button>
                        <button class="tablinks h3" onclick="openImg(event, '3')">18.4 kWh</button>
                        <button class="tablinks h3" onclick="openImg(event, '3')">24.1 kWh</button>

                </div>
                <div id="1" class="tabcontent" style='display: block'>
                    <img src='http://solarunion.test/wp-content/uploads/2021/10/how-to-draw-a-scientific-graph-1.gif'/>
                </div>
                <div id="2" class="tabcontent">
                    <img src='http://solarunion.test/wp-content/uploads/2021/10/how-to-draw-a-scientific-graph-1.gif'/>
                </div>
            </div>
        </div>
        <div class='container'>
            <p class='narrower gutter-top'>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </section>
    <!-- <?php if( get_field('call_to_action') ): ?>
        <section class='cta-banner gutter-xl bg-third-w-to-b'>
            <div class='container'>
                <h3 class='narrower'><?php the_field('call_to_action'); ?></h3>
                <a href='#contact'>Contact us to find out more</a>
            </div>
        </section>
    <?php endif; ?>

    <section class="parallax">
        <div class="parallax-image">
            <img src="/wp-content/uploads/2021/09/sungrow-emea-VC-m6ULjJ6Y-unsplash-1-scaled.jpg" />
            <div class="container" id='project1'>
                <p class='smallHeading'>Gold Coast</p>    
                <h3 class='h2'>Project 1</h3>
                <p class='narrower'>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="parallax-image">
            <img src="/wp-content/uploads/2021/09/science-in-hd-yqEJ8HQ8y2o-unsplash-1-scaled.jpg" />
            <div class="container">
                <p class='smallHeading'>Noosa</p>    
                <h3 class='h2'>Project 2</h3>
                <p class='narrower'>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </section>
    <section class="testimonials bg-third-w-to-b">
        <div class="container">
            <div class='gutter-xl'>
                <?php if( get_field('testimonials_heading') ): ?>
                    <h2 class='narrower gutter-bottom'><?php the_field('testimonials_heading'); ?></h2>
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
                        <p class='smallHeading'>Name</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class='contact  gutter-xl' id='contact'>
        <div class="">
            <h2>Contact Us</h2>
            <p class='narrower'>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div class='icons gutter-top'>
                <div class='icon'>
                    <?php get_template_part('assets/img' , 'phone'); ?>
                    <a href='tel:0000000'>000000</a>
                </div>
                <div  class='icon'>
                    <?php get_template_part('assets/img' , 'envelope'); ?>
                    <a href='mailto:solarunionau@gmail.com '>solarunionau@gmail.com</a>
                </div>
                <div  class='icon'>
                    <?php get_template_part('assets/img' , 'pin'); ?>
                    <a target='_blank' href='https://goo.gl/maps/Ssn9uF6NyH2Fi7889'>222 somewhere street</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>