<?php
/**
 * Template Name: Contacto
 * Template Post Type: page
 */

if (!defined('ABSPATH')) {
    exit;
}

$instagramFeed = get_theme_mod('contact_instagram_shortcode', '');
$email = get_theme_mod('contact_email', 'camilo.velosa@frikiup.co');
$socialLinks = [
    'instagram' => ['label' => 'Instagram', 'url' => get_theme_mod('contact_instagram_url', 'https://www.instagram.com/frikiup/')],
    'youtube'   => ['label' => 'YouTube', 'url' => get_theme_mod('contact_youtube_url', 'https://www.youtube.com/@Frikiup')],
    'frikiup'   => ['label' => 'FrikiUp', 'url' => get_theme_mod('contact_frikiup_url', 'https://frikiup.co/')],
    'email'     => ['label' => __('Conversemos', 'cavtheme'), 'url' => $email ? 'mailto:' . $email : ''],
];
$contactLinks = [
    'email'   => $socialLinks['email'],
    'youtube' => $socialLinks['youtube'],
    'frikiup' => $socialLinks['frikiup'],
];
$footerSocialLinks = [
    ...$socialLinks,
    'youtube-patch-notes' => ['label' => __('YouTube Patch Notes', 'cavtheme'), 'url' => get_theme_mod('contact_youtube_patch_notes_url', 'https://www.youtube.com/@FrikiUpPatchNotes')],
    'tiktok'              => ['label' => 'TikTok', 'url' => get_theme_mod('contact_tiktok_url', 'https://www.tiktok.com/@frikiup')],
    'x'                   => ['label' => 'X', 'url' => get_theme_mod('contact_x_url', 'https://x.com/FrikiUp')],
];
$contactIcon = static function (string $network): string {
    $icons = [
        'instagram' => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle cx="17.5" cy="6.5" r="1" class="contact-icon__fill"></circle></svg>',
        'youtube'   => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="6" width="19" height="12" rx="4"></rect><path d="m10 9.5 5 2.5-5 2.5z" class="contact-icon__fill"></path></svg>',
        'youtube-patch-notes' => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="6" width="19" height="12" rx="4"></rect><path d="m10 9.5 5 2.5-5 2.5z" class="contact-icon__fill"></path></svg>',
        'frikiup'   => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg>',
        'email'     => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="m4 7 8 6 8-6"></path></svg>',
        'tiktok'    => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 4v9.2a3.7 3.7 0 1 1-3-3.63"></path><path d="M14 4c.8 2.2 2.3 3.6 4.5 4"></path></svg>',
        'x'         => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4l16 16M20 4 4 20"></path></svg>',
    ];

    return $icons[$network] ?? '';
};

get_header();
?>

<main class="contact-page" id="main-content">
    <section class="contact-hero" aria-labelledby="contact-title">
        <div class="contact-hero__content">
            <span class="contact-hero__eyebrow"><?php echo esc_html__('Hablemos', 'cavtheme'); ?></span>
            <h1 class="contact-hero__title" id="contact-title"><?php echo esc_html__('Contacto', 'cavtheme'); ?></h1>
        </div>
    </section>

    <section class="contact-hub" aria-label="<?php echo esc_attr__('Enlaces y redes sociales', 'cavtheme'); ?>">
        <div class="contact-hub__card">
            <header class="contact-hub__intro">
                <span class="contact-hub__mark" role="img" aria-label="<?php echo esc_attr__('Camilo Velosa', 'cavtheme'); ?>"></span>
                <h2><?php echo esc_html__('Camilo Velosa', 'cavtheme'); ?></h2>
                <p><?php echo esc_html__('Ideas, proyectos y conversaciones que merecen hacerse realidad.', 'cavtheme'); ?></p>
            </header>

            <div class="contact-hub__links">
                <?php foreach ($contactLinks as $network => $social) : ?>
                    <a class="contact-hub__link" href="<?php echo esc_url($social['url']); ?>"<?php echo $network !== 'email' ? ' target="_blank" rel="noopener noreferrer"' : ''; ?>>
                        <span class="contact-hub__link-label"><?php echo $contactIcon($network); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><span><?php echo esc_html($social['label']); ?></span></span><span aria-hidden="true">↗</span>
                    </a>
                <?php endforeach; ?>
            </div>

            <section class="contact-hub__feed" aria-labelledby="instagram-feed-title">
                <h3 id="instagram-feed-title"><?php echo esc_html__('Instagram', 'cavtheme'); ?></h3>
                <?php if ($instagramFeed) : ?>
                    <div class="contact-hub__feed-content"><?php echo do_shortcode($instagramFeed); ?></div>
                <?php else : ?>
                    <div class="contact-hub__feed-placeholder">
                        <span aria-hidden="true">◎</span>
                        <p><?php echo esc_html__('Aquí se mostrará el feed de Instagram.', 'cavtheme'); ?></p>
                        <small><?php echo esc_html__('Configúralo desde Apariencia → Personalizar → Contacto y redes sociales.', 'cavtheme'); ?></small>
                    </div>
                <?php endif; ?>
            </section>

            <nav class="contact-hub__socials" aria-label="<?php echo esc_attr__('Redes sociales', 'cavtheme'); ?>">
                <?php foreach ($footerSocialLinks as $network => $social) : ?>
                    <a class="contact-hub__social contact-hub__social--<?php echo esc_attr($network); ?>" href="<?php echo esc_url($social['url']); ?>"<?php echo $network !== 'email' ? ' target="_blank" rel="noopener noreferrer"' : ''; ?> aria-label="<?php echo esc_attr($social['label']); ?>">
                        <?php echo $contactIcon($network); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        </div>
    </section>
</main>

<?php get_footer();
