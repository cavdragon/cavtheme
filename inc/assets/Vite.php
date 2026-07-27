<?php

if (!defined('ABSPATH')) {
    exit;
}

class Vite
{
    public static function isDevelopment(): bool
    {
        return WP_ENV === 'development';
    }

    public static function url(): string
    {
        return CAV_VITE_URL;
    }

    public static function entry(): string
    {
        return CAV_VITE_ENTRY;
    }
}