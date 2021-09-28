<nav class='top-navigation'>
    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                "menu_class" => 'navbar'
            )
        );
   
     if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    };
    ?>
</nav>
