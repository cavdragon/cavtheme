<?php

if (!defined('ABSPATH')) {
    exit;
}

class Config
{
    public static function init()
    {
        /*
        |--------------------------------------------------------------------------
        | Environment
        |--------------------------------------------------------------------------
        */

        if (!defined('WP_ENV')) {
            define('WP_ENV', 'production');
        }

        /*
        |--------------------------------------------------------------------------
        | Theme
        |--------------------------------------------------------------------------
        */

        if (!defined('CAV_THEME_NAME')) {
            define('CAV_THEME_NAME', 'CavTheme');
        }

        if (!defined('CAV_THEME_VERSION')) {
            define('CAV_THEME_VERSION', '1.0.0');
        }

        if (!defined('CAV_THEME_PATH')) {
            define('CAV_THEME_PATH', get_template_directory());
        }

        if (!defined('CAV_THEME_URI')) {
            define('CAV_THEME_URI', get_template_directory_uri());
        }

        /*
        |--------------------------------------------------------------------------
        | Vite
        |--------------------------------------------------------------------------
        */

        if (!defined('CAV_VITE_URL')) {
            define('CAV_VITE_URL', 'http://localhost:5173');
        }

    }
}