<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Union website</title>

    <?php wp_head(); ?>

</head>
<body>

<header>

    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                "menu_class" => 'navbar'
            )
        );
    ?>

</header>
    
