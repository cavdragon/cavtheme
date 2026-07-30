<?php
/**
 * Template Name: 3D Maker
 * Template Post Type: page
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="maker-3d-page" id="main-content">
    <section class="maker-3d-hero" aria-labelledby="maker-3d-title">
        <div class="maker-3d-hero__content">
            <span class="maker-3d-hero__eyebrow"><?php echo esc_html__('Diseño y fabricación', 'cavtheme'); ?></span>
            <h1 class="maker-3d-hero__title" id="maker-3d-title"><?php echo esc_html__('3D Maker', 'cavtheme'); ?></h1>
            <p class="maker-3d-hero__subtitle"><?php echo esc_html__('Objetos e ideas que pasan de la pantalla al mundo real.', 'cavtheme'); ?></p>
        </div>
    </section>

    <div class="maker-3d-layout">
        <aside class="maker-3d-sidebar" aria-label="<?php echo esc_attr__('Navegación de 3D Maker', 'cavtheme'); ?>">
            <p class="maker-3d-sidebar__title"><?php echo esc_html__('3D Maker', 'cavtheme'); ?></p>
            <?php
            wp_nav_menu([
                'theme_location'  => 'lateral3dmaker',
                'container'       => 'nav',
                'container_class' => 'maker-3d-sidebar__nav',
                'menu_class'      => 'maker-3d-sidebar__menu',
                'fallback_cb'     => false,
            ]);
            ?>
        </aside>

        <div class="maker-3d-content">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('maker-3d-content__entry'); ?>>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</main>

<?php get_footer();
