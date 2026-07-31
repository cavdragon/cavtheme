<?php
/**
 * Template Name: 3D Maker: Subpágina
 * Template Post Type: page
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="maker-3d-page maker-3d-page--child" id="main-content">
    <section class="maker-3d-hero" aria-labelledby="maker-3d-title">
        <div class="maker-3d-hero__content">
            <span class="maker-3d-hero__eyebrow"><?php echo esc_html__('3D Maker', 'cavtheme'); ?></span>
            <h1 class="maker-3d-hero__title" id="maker-3d-title"><?php echo esc_html(get_the_title()); ?></h1>
        </div>
    </section>

    <div class="maker-3d-layout">
        <aside class="maker-3d-sidebar" aria-label="<?php echo esc_attr__('Navegación de 3D Maker', 'cavtheme'); ?>">
            <button class="maker-3d-sidebar__title sidebar-menu__toggle" type="button" aria-expanded="false">
                <span><?php echo esc_html__('Menú', 'cavtheme'); ?></span>
                <span class="sidebar-menu__chevron" aria-hidden="true"></span>
            </button>
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
