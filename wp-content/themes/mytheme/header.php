<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" type="text/css" href="wp-content/themes/mytheme/style.css">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <a href="<?php echo home_url( '/' ); ?>">
            <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="Logo">
        </a>
    </header>
    
    <?php wp_body_open(); ?>