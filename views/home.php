<?php
/**
 * Template Name: Home
 * Template Post Type: page
 */

if (!defined('ABSPATH')) {
    exit;
}

$panels = [
    ['id' => 'web-development', 'index' => '01', 'title' => __('Desarrollo Web', 'cavtheme'), 'description' => __('Experiencias digitales rápidas, claras y memorables.', 'cavtheme'), 'url' => home_url('/desarrollo-web/'), 'variant' => 'web'],
    ['id' => 'content-creator', 'index' => '02', 'title' => __('Creador de Contenidos', 'cavtheme'), 'description' => __('Ideas, historias y formatos que conectan con las personas.', 'cavtheme'), 'url' => home_url('/creador-de-contenidos/'), 'variant' => 'content'],
    ['id' => '3d-maker', 'index' => '03', 'title' => __('3D Maker', 'cavtheme'), 'description' => __('Objetos e ideas que pasan de la pantalla al mundo real.', 'cavtheme'), 'url' => home_url('/3d-maker/'), 'variant' => 'maker'],
    ['id' => 'contact', 'index' => '04', 'title' => __('Contacto', 'cavtheme'), 'description' => __('Conversemos sobre la próxima idea que quieres hacer realidad.', 'cavtheme'), 'url' => home_url('/contacto/'), 'variant' => 'contact'],
];

get_header();
?>

<main class="home-page" id="main-content">
    <?php get_template_part('template-parts/home/hero', null, ['panels' => $panels]); ?>
</main>

<?php get_footer();
