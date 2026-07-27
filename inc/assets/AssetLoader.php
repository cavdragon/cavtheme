<?php

if (!defined('ABSPATH')) {
    exit;
}

class AssetLoader
{
    public static function enqueue(string $entry = 'main'): void
    {
        if (Vite::isDevelopment()) {
            self::enqueueDevelopment($entry);
            return;
        }

        self::enqueueProduction($entry);
    }

    /*
    |--------------------------------------------------------------------------
    | Development
    |--------------------------------------------------------------------------
    */

    private static function enqueueDevelopment(string $entry): void
    {
        wp_enqueue_script(
            'vite-client',
            Vite::url() . '/@vite/client',
            [],
            null,
            false
        );

        wp_enqueue_script(
            'cavtheme-' . $entry,
            Vite::url() . '/assets/js/' . $entry . '.js',
            ['vite-client'],
            null,
            true
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Production
    |--------------------------------------------------------------------------
    */

    private static function enqueueProduction(string $entry): void
    {
        $css = Entry::css($entry);
        $js  = Entry::js($entry);

        if ($css) {

            wp_enqueue_style(
                'cavtheme-' . $entry,
                CAV_THEME_URI . '/assets/' . $css,
                [],
                CAV_THEME_VERSION
            );

        }

        if ($js) {

            wp_enqueue_script(
                'cavtheme-' . $entry,
                CAV_THEME_URI . '/assets/' . $js,
                [],
                null,
                true
            );

        }
    }

    /*
    |--------------------------------------------------------------------------
    | Script Type Module
    |--------------------------------------------------------------------------
    */

    public static function scriptLoaderTag(
        string $tag,
        string $handle,
        string $src
    ): string {

        if (
            $handle === 'vite-client' ||
            str_starts_with($handle, 'cavtheme-')
        ) {

            return sprintf(
                '<script type="module" src="%s"></script>',
                esc_url($src)
            );

        }

        return $tag;
    }
}