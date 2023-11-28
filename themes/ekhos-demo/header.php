<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.css">
</head>
<body <?php body_class(get_post()->post_name)?>>

<header>
    <div class="header_content">
        <a href="" class="header_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header_logo_icon.png" alt="logo">
        </a>
        
        <div class="header_burger">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header_burger_icon.png" alt="burger">
        </div>
    </div>
</header>

<div class="container">
