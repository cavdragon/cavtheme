<?php

if (!defined('ABSPATH')) {
    exit;
}

class Header
{
    public static function init(): void
    {
        add_action('wp_body_open', [self::class, 'render']);
    }

    public static function render(): void
    {
        get_template_part('template-parts/header/site-header', null, [
            'is_home' => is_front_page() || is_page_template('views/home.php'),
        ]);
    }
}
