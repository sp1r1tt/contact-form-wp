<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header style="background: transparent;">
        <div class="logo" style="position: absolute; top: 20px; left: 20px; background: transparent; border: none; color: #ff00ff;">
            <?php echo esc_html(get_field('site_logo_text', get_the_ID())); ?>
        </div>
        <div class="menu-container" style="position: absolute; top: 20px; right: 20px;">
            <div class="menu-icon" id="menu-toggle"></div>
        </div>
    </header>
