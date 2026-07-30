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
            'primary'       => __('Primary Menu', 'cavtheme'),
            'lateralwebdev' => __('Menú lateral: Desarrollo Web', 'cavtheme'),
            'lateralcontentcreator' => __('Menú lateral: Creador de Contenido', 'cavtheme'),
            'lateral3dmaker' => __('Menú lateral: 3D Maker', 'cavtheme'),
        ]);
    }
}
