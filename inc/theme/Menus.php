<?php

if (!defined('ABSPATH')) {
    exit;
}

class Menus
{
    public static function init(): void
    {
        add_action('after_setup_theme', [self::class, 'register']);
    }

    public static function register(): void
    {
        register_nav_menus([
            'primary' => __('Primary Menu', 'cavtheme'),
            'footer'  => __('Footer Menu', 'cavtheme'),
        ]);
    }
}