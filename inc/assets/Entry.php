<?php

if (!defined('ABSPATH')) {
    exit;
}

class Entry
{
    public static function get(string $entry = CAV_VITE_ENTRY): array
    {
        $manifest = Manifest::load();

        $key = 'assets/js/' . $entry . '.js';

        return $manifest[$key] ?? [];
    }

    public static function js(string $entry = CAV_VITE_ENTRY): ?string
    {
        return self::get($entry)['file'] ?? null;
    }

    public static function css(string $entry = CAV_VITE_ENTRY): ?string
    {
        return self::get($entry)['css'][0] ?? null;
    }
}