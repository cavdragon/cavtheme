<?php

class Application
{
    public static function boot()
    {
        /*
        |--------------------------------------------------------------------------
        | Core
        |--------------------------------------------------------------------------
        */

        require_once get_template_directory() . '/inc/core/Config.php';

        /*
        |--------------------------------------------------------------------------
        | Assets
        |--------------------------------------------------------------------------
        */

        require_once get_template_directory() . '/inc/assets/Manifest.php';
        require_once get_template_directory() . '/inc/assets/Entry.php';
        require_once get_template_directory() . '/inc/assets/Vite.php';
        require_once get_template_directory() . '/inc/assets/AssetLoader.php';
        require_once get_template_directory() . '/inc/assets/AssetManager.php';

        /*
        |--------------------------------------------------------------------------
        | Theme
        |--------------------------------------------------------------------------
        */

        require_once get_template_directory() . '/inc/theme/Setup.php';
        require_once get_template_directory() . '/inc/theme/Menus.php';
        require_once get_template_directory() . '/inc/theme/Header.php';
        require_once get_template_directory() . '/inc/theme/Footer.php';
        require_once get_template_directory() . '/inc/theme/Customizer.php';
        require_once get_template_directory() . '/inc/theme/Theme.php';

        /*
        |--------------------------------------------------------------------------
        | Boot
        |--------------------------------------------------------------------------
        */

        Config::init();
        Theme::init();
        AssetManager::init();

    }
}