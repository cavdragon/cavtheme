<?php

if (!defined('ABSPATH')) {
    exit;
}

class Setup
{
    public static function init(): void
    {
        add_action('after_setup_theme', [self::class, 'setup']);
    }

    public static function setup(): void
    {
        // add_theme_support(...)
    }
}