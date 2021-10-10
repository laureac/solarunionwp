<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Union website</title>

    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<header>

    <?php get_template_part('partials/section', 'nav');?>

</header>

<body <?php body_class(); ?> id="theme-content">
    <div id="loading-screen" class='bg-black' style="position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999; text-align: center;">
        <div id=LoadingBar>
            <div class=orangebox id=box1></div>
            <div class=orangebox id=box2></div>
            <div class=orangebox id=box3></div>
            <div class=orangebox id=box4></div>
            <div class=orangebox id=box5></div>
            <div class=orangebox id=box6></div>
            <div class=orangebox id=box7></div>
        </div>
	</div>
    
