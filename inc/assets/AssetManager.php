<?php

if (!defined('ABSPATH')) {
    exit;
}

class AssetManager
{
    public static function init(): void
    {
        add_action(
            'wp_enqueue_scripts',
            [self::class, 'enqueue']
        );

        add_filter(
            'script_loader_tag',
            [AssetLoader::class, 'scriptLoaderTag'],
            10,
            3
        );
    }

    public static function enqueue(): void
    {
        AssetLoader::enqueue('main');
    }
}