<?php
/**
 * Template Name: Creador de Contenido: Subpágina
 * Template Post Type: page
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main class="content-creator-page content-creator-page--child" id="main-content">
    <section class="content-creator-hero" aria-labelledby="content-creator-title">
        <div class="content-creator-hero__content">
            <span class="content-creator-hero__eyebrow"><?php echo esc_html__('Creador de Contenido', 'cavtheme'); ?></span>
            <h1 class="content-creator-hero__title" id="content-creator-title"><?php echo esc_html(get_the_title()); ?></h1>
        </div>
    </section>

    <div class="content-creator-layout">
        <aside class="content-creator-sidebar" aria-label="<?php echo esc_attr__('Navegación de Creador de Contenido', 'cavtheme'); ?>">
            <button class="content-creator-sidebar__title sidebar-menu__toggle" type="button" aria-expanded="false">
                <span><?php echo esc_html__('Menú', 'cavtheme'); ?></span>
                <span class="sidebar-menu__chevron" aria-hidden="true"></span>
            </button>
            <?php
            wp_nav_menu([
                'theme_location'  => 'lateralcontentcreator',
                'container'       => 'nav',
                'container_class' => 'content-creator-sidebar__nav',
                'menu_class'      => 'content-creator-sidebar__menu',
                'fallback_cb'     => false,
            ]);
            ?>
        </aside>

        <div class="content-creator-content">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('content-creator-content__entry'); ?>>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</main>

<?php get_footer();
