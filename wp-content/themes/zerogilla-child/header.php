<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    
    <header class="hero__nav">
        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/zerozilla_logo.svg" alt="Zerogilla Logo"></div>

        <nav class="menu">
            <a href="#">About Us</a>
            <a href="#">Our Stack</a>
            <a href="#">Case Study</a>
            <a href="#">Resources</a>
        </nav>

        <a href="#" class="btn btn--outline">Let's Talk!</a>
    
    </header>
