<?php
/**
 * Template Name: Desarrollo Web
 * Template Post Type: page
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="web-development-page" id="main-content">
    <section class="web-development-hero" aria-labelledby="web-development-title">
        <div class="web-development-hero__content">
            <span class="web-development-hero__eyebrow"><?php echo esc_html__('Servicios digitales', 'cavtheme'); ?></span>
            <h1 class="web-development-hero__title" id="web-development-title"><?php echo esc_html__('Desarrollo Web', 'cavtheme'); ?></h1>
            <p class="web-development-hero__subtitle"><?php echo esc_html__('Experiencias digitales rápidas, claras y memorables.', 'cavtheme'); ?></p>
        </div>
    </section>

    <div class="web-development-layout">
        <aside class="web-development-sidebar" aria-label="<?php echo esc_attr__('Navegación de Desarrollo Web', 'cavtheme'); ?>">
            <p class="web-development-sidebar__title"><?php echo esc_html__('Desarrollo Web', 'cavtheme'); ?></p>
            <?php
            wp_nav_menu([
                'theme_location'  => 'lateralwebdev',
                'container'       => 'nav',
                'container_class' => 'web-development-sidebar__nav',
                'menu_class'      => 'web-development-sidebar__menu',
                'fallback_cb'     => false,
            ]);
            ?>
        </aside>

        <div class="web-development-content">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('web-development-content__entry'); ?>>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</main>

<?php get_footer();
