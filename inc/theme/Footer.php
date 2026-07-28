<?php

if (!defined('ABSPATH')) {
    exit;
}

class Footer
{
    public static function init(): void
    {
        add_action('wp_footer', [self::class, 'render'], 5);
    }

    public static function render(): void
    {
        get_template_part('template-parts/footer/site-footer', null, [
            'is_home' => is_front_page() || is_page_template('views/home.php'),
        ]);
    }
}
