<div class='footer gutter-xl'>
    <?php 
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    };

        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                "menu_class" => 'footer-menu'
            )
        );
    ?>
</div>
<?php wp_footer(); ?>
</body>
</html>