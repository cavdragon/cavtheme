<?php
if (!defined('ABSPATH')) {
    exit;
}

$isHome   = !empty($args['is_home']);
$siteName = get_bloginfo('name');
?>

<footer class="site-footer<?php echo $isHome ? ' site-footer--home' : ''; ?>">
    <div class="site-footer__content">
        <p class="site-footer__text">
            <?php echo esc_html(sprintf(__('© %1$s %2$s. Powered by CavTheme.', 'cavtheme'), wp_date('Y'), $siteName)); ?>
        </p>
        <p class="site-footer__text">
            <?php echo esc_html__('AI Driven Development · Vibe Coding 🤖', 'cavtheme'); ?>
        </p>
    </div>
</footer>
