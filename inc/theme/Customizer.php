<?php

if (!defined('ABSPATH')) {
    exit;
}

class Customizer
{
    public static function init(): void
    {
        add_action('customize_register', [self::class, 'register']);
    }

    public static function register(WP_Customize_Manager $customizer): void
    {
        $customizer->add_section('cavtheme_contact', [
            'title'    => __('Contacto y redes sociales', 'cavtheme'),
            'priority' => 160,
        ]);

        $fields = [
            'contact_instagram_url' => __('URL de Instagram', 'cavtheme'),
            'contact_facebook_url'  => __('URL de Facebook', 'cavtheme'),
            'contact_youtube_url'   => __('URL de YouTube', 'cavtheme'),
            'contact_youtube_patch_notes_url' => __('URL de YouTube Patch Notes', 'cavtheme'),
            'contact_frikiup_url'   => __('URL de FrikiUp', 'cavtheme'),
            'contact_tiktok_url'    => __('URL de TikTok', 'cavtheme'),
            'contact_twitch_url'    => __('URL de Twitch', 'cavtheme'),
            'contact_x_url'         => __('URL de X', 'cavtheme'),
        ];

        foreach ($fields as $setting => $label) {
            $customizer->add_setting($setting, [
                'sanitize_callback' => 'esc_url_raw',
            ]);

            $customizer->add_control($setting, [
                'label'   => $label,
                'section' => 'cavtheme_contact',
                'type'    => 'url',
            ]);
        }

        $customizer->add_setting('contact_email', [
            'sanitize_callback' => 'sanitize_email',
        ]);
        $customizer->add_control('contact_email', [
            'label'   => __('Correo de contacto', 'cavtheme'),
            'section' => 'cavtheme_contact',
            'type'    => 'email',
        ]);

        $customizer->add_setting('contact_instagram_shortcode', [
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $customizer->add_control('contact_instagram_shortcode', [
            'label'       => __('Shortcode del feed de Instagram', 'cavtheme'),
            'description' => __('Pega aquí el shortcode proporcionado por tu plugin de Instagram.', 'cavtheme'),
            'section'     => 'cavtheme_contact',
            'type'        => 'text',
        ]);
    }
}
