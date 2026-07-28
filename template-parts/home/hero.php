<?php
if (!defined('ABSPATH')) {
    exit;
}

$panels = $args['panels'] ?? [];
?>

<section class="home-hero" aria-label="<?php echo esc_attr__('Áreas de especialidad', 'cavtheme'); ?>">
    <h1 class="home-hero__title screen-reader-text">
        <?php echo esc_html__('Portafolio personal', 'cavtheme'); ?>
    </h1>

    <div class="home-hero__panels">
        <?php foreach ($panels as $panel) : ?>
            <?php get_template_part('template-parts/home/panel', null, ['panel' => $panel]); ?>
        <?php endforeach; ?>
    </div>
</section>
