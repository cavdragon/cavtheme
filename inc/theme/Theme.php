<?php

require_once get_template_directory() . '/inc/theme/Setup.php';
require_once get_template_directory() . '/inc/theme/Menus.php';
require_once get_template_directory() . '/inc/theme/Header.php';
require_once get_template_directory() . '/inc/theme/Footer.php';
require_once get_template_directory() . '/inc/theme/Customizer.php';

class Theme
{
    public static function init(): void
    {
        Setup::init();
        Menus::init();
        Header::init();
        Footer::init();
        Customizer::init();
    }
}
