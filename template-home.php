<?php
$logo_text = get_field('site_logo_text', get_the_ID());
$contact_title = get_field('contact_title', get_the_ID());
$contact_button_text = get_field('contact_button_text', get_the_ID()); 

get_header();
?>

<div class="container" id="home" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
<div class="menu" id="menu">
    <div class="menu-close" id="menu-close">✕</div>
    <?php
    wp_nav_menu([
        'theme_location' => 'landing-menu',
        'container' => false,
        'items_wrap' => '%3$s',
        'menu_class' => '',
        'fallback_cb' => false, 
    ]);
    ?>
</div>
    <div class="section" id="contact" style="text-align: center;">
        <h2 style="text-align: center;"><?php echo esc_html($contact_title); ?></h2>
        <div class="contact-form cf7-wrapper" style="max-width: 500px; margin: 0 auto; text-align: center;">
            <?php
            if ($contact_button_text) {
                echo do_shortcode($contact_button_text);
            } else {
                echo '<p>No contact form available. Please configure the contact_button_text field in ACF.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>