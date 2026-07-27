<?php

if (!defined('ABSPATH')) {
    exit;
}

class Manifest
{
    private static array $manifest = [];

    public static function load(): array
    {
        if (!empty(self::$manifest)) {
            return self::$manifest;
        }

        $manifestPath = CAV_THEME_PATH . '/assets/.vite/manifest.json';

        if (!file_exists($manifestPath)) {
            return [];
        }

        $manifest = file_get_contents($manifestPath);

        if ($manifest === false) {
            return [];
        }

        self::$manifest = json_decode($manifest, true) ?? [];

        return self::$manifest;
    }
}