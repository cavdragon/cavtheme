<?php
if (!defined('ABSPATH')) {
    exit;
}

$panel       = $args['panel'] ?? [];
$id          = sanitize_html_class($panel['id'] ?? 'panel');
$index       = $panel['index'] ?? '';
$title       = $panel['title'] ?? '';
$description = $panel['description'] ?? '';
$url         = $panel['url'] ?? '';
$variant     = sanitize_html_class($panel['variant'] ?? 'default');
?>

<a class="home-panel home-panel--<?php echo esc_attr($variant); ?>" href="<?php echo esc_url($url); ?>" aria-labelledby="<?php echo esc_attr($id); ?>-title" aria-describedby="<?php echo esc_attr($id); ?>-description">
    <span class="home-panel__index" aria-hidden="true"><?php echo esc_html($index); ?></span>

    <span class="home-panel__content">
        <span class="home-panel__eyebrow"><?php echo esc_html__('Explorar', 'cavtheme'); ?></span>
        <span class="home-panel__title" id="<?php echo esc_attr($id); ?>-title"><?php echo esc_html($title); ?></span>
        <span class="home-panel__description" id="<?php echo esc_attr($id); ?>-description"><?php echo esc_html($description); ?></span>
        <span class="home-panel__button">
            <?php echo esc_html__('Ver más', 'cavtheme'); ?> <span aria-hidden="true">→</span>
        </span>
    </span>
</a>
