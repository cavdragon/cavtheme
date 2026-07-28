<?php
if (!defined('ABSPATH')) {
    exit;
}

$isHome   = !empty($args['is_home']);
$siteName = get_bloginfo('name');
?>

<header class="site-header<?php echo $isHome ? ' site-header--home' : ''; ?>">
    <div class="site-header__brand">
        <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(sprintf(__('Ir a %s', 'cavtheme'), $siteName)); ?>">
                <?php echo esc_html($siteName); ?>
            </a>
        <?php endif; ?>
    </div>

    <?php if (!$isHome) : ?>
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class' => 'site-header__nav',
            'container_aria_label' => __('Primary Menu', 'cavtheme'),
            'menu_class'     => 'menu',
            'fallback_cb'    => false,
        ]);
        ?>
    <?php endif; ?>
</header>
