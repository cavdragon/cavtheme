<?php
/**
 * Template Name: Desarrollo Web: Subpágina
 * Template Post Type: page
 */

if (!defined('ABSPATH')) {
    exit;
}

$slug = get_post_field('post_name', get_queried_object_id());
$isCv = $slug === 'hoja-de-vida-camilo-a-velosa-p';
$skills = [
    'WordPress' => 90,
    'Advanced Custom Fields (ACF)' => 90,
    'PHP' => 70,
    'HTML5' => 95,
    'CSS3' => 95,
    'Sass' => 60,
    'JavaScript' => 60,
    'Elementor' => 40,
    'Divi' => 50,
    'Git' => 40,
    'Vite' => 30,
    'Docker' => 30,
    'TikTok Effect House' => 30,
    'Vibe Coding / Codex' => 50,
];

get_header();
?>

<main class="web-development-page web-development-page--child" id="main-content">
    <section class="web-development-hero" aria-labelledby="web-development-title">
        <div class="web-development-hero__content">
            <span class="web-development-hero__eyebrow"><?php echo esc_html__('Desarrollo Web', 'cavtheme'); ?></span>
            <h1 class="web-development-hero__title" id="web-development-title"><?php echo esc_html(get_the_title()); ?></h1>
            <?php if ($isCv) : ?>
                <p class="web-development-hero__subtitle"><?php echo esc_html__('Perfil profesional y experiencia de Camilo Andrés Velosa Prieto.', 'cavtheme'); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <div class="web-development-layout">
        <aside class="web-development-sidebar" aria-label="<?php echo esc_attr__('Navegación de Desarrollo Web', 'cavtheme'); ?>">
            <button class="web-development-sidebar__title sidebar-menu__toggle" type="button" aria-expanded="false">
                <span><?php echo esc_html__('Menú', 'cavtheme'); ?></span>
                <span class="sidebar-menu__chevron" aria-hidden="true"></span>
            </button>
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
            <?php if ($isCv) : ?>
                <article class="web-cv">
                    <header class="web-cv__intro">
                        <div class="web-cv__portrait" role="img" aria-label="<?php echo esc_attr__('Camilo Andrés Velosa Prieto', 'cavtheme'); ?>"></div>
                        <div class="web-cv__intro-copy">
                            <p class="web-cv__eyebrow"><?php echo esc_html__('Currículum Vitae', 'cavtheme'); ?></p>
                            <h2><?php echo esc_html__('Camilo Andrés Velosa Prieto', 'cavtheme'); ?></h2>
                            <p><?php echo esc_html__('Ingeniero Multimedia y especialista en WordPress con más de 15 años de experiencia en desarrollo web, implementación de soluciones digitales y creación de sitios personalizados.', 'cavtheme'); ?></p>
                            <p><?php echo esc_html__('Especializado en el desarrollo de temas y templates desde cero, aplicando buenas prácticas de programación, rendimiento web y experiencia de usuario (UX).', 'cavtheme'); ?></p>
                            <p><?php echo esc_html__('Cuento con amplia experiencia en Advanced Custom Fields (ACF), desarrollo y personalización de plugins, integración de funcionalidades a medida y adaptación de WordPress a requerimientos complejos de negocio. También trabajo con Elementor y Divi cuando el proyecto lo requiere, sin depender exclusivamente de constructores visuales.', 'cavtheme'); ?></p>
                        </div>
                    </header>

                    <section class="web-cv__section web-cv__skills" aria-labelledby="cv-skills">
                        <h3 id="cv-skills"><?php echo esc_html__('Skills', 'cavtheme'); ?></h3>
                        <div class="web-cv__skills-grid">
                            <?php foreach ($skills as $skill => $level) : ?>
                                <div class="web-cv__skill">
                                    <div class="web-cv__skill-meta">
                                        <span><?php echo esc_html($skill); ?></span>
                                        <span><?php echo esc_html($level); ?>%</span>
                                    </div>
                                    <div class="web-cv__skill-track" role="progressbar" aria-label="<?php echo esc_attr($skill); ?>" aria-valuemin="0" aria-valuemax="100" aria-valuenow="<?php echo esc_attr($level); ?>" data-level="<?php echo esc_attr($level); ?>">
                                        <span class="web-cv__skill-fill"></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <section class="web-cv__section" aria-labelledby="cv-experience">
                        <h3 id="cv-experience"><?php echo esc_html__('Experiencia laboral', 'cavtheme'); ?></h3>
                        <div class="web-cv__timeline">
                            <article class="web-cv__role">
                                <p class="web-cv__period"><?php echo esc_html__('Febrero 2017 — Junio 2026', 'cavtheme'); ?></p>
                                <h4><?php echo esc_html__('150 por ciento', 'cavtheme'); ?></h4>
                                <p class="web-cv__role-title"><?php echo esc_html__('WordPress Developer Senior / Ingeniero Multimedia', 'cavtheme'); ?></p>
                                <p><?php echo esc_html__('Desarrollo e implementación de soluciones web personalizadas, estructuras de contenido dinámicas con ACF, optimización y pruebas funcionales para garantizar calidad y estabilidad.', 'cavtheme'); ?></p>
                            </article>
                            <article class="web-cv__role">
                                <p class="web-cv__period"><?php echo esc_html__('Febrero 2014 — Diciembre 2016', 'cavtheme'); ?></p>
                                <h4><?php echo esc_html__('CoctelBrand', 'cavtheme'); ?></h4>
                                <p class="web-cv__role-title"><?php echo esc_html__('Front-End Developer / WordPress Developer', 'cavtheme'); ?></p>
                                <p><?php echo esc_html__('Maquetación de campañas digitales y sitios web para distintas marcas, trabajando junto a equipos de diseño y estrategia.', 'cavtheme'); ?></p>
                            </article>
                            <article class="web-cv__role">
                                <p class="web-cv__period"><?php echo esc_html__('2012', 'cavtheme'); ?></p>
                                <h4><?php echo esc_html__('Carvajal Información', 'cavtheme'); ?></h4>
                                <p class="web-cv__role-title"><?php echo esc_html__('Front-End Developer', 'cavtheme'); ?></p>
                                <p><?php echo esc_html__('Desarrollo de interfaces web siguiendo lineamientos de diseño y estándares de calidad.', 'cavtheme'); ?></p>
                            </article>
                            <article class="web-cv__role">
                                <p class="web-cv__period"><?php echo esc_html__('2012', 'cavtheme'); ?></p>
                                <h4><?php echo esc_html__('Lecuar', 'cavtheme'); ?></h4>
                                <p class="web-cv__role-title"><?php echo esc_html__('UI Developer / Front-End Developer', 'cavtheme'); ?></p>
                            </article>
                            <article class="web-cv__role">
                                <p class="web-cv__period"><?php echo esc_html__('2010', 'cavtheme'); ?></p>
                                <h4><?php echo esc_html__('AR Solutions', 'cavtheme'); ?></h4>
                                <p class="web-cv__role-title"><?php echo esc_html__('Front-End Developer / WordPress Developer', 'cavtheme'); ?></p>
                            </article>
                        </div>
                    </section>

                    <section class="web-cv__section web-cv__section--two-columns" aria-labelledby="cv-education">
                        <div>
                            <h3 id="cv-education"><?php echo esc_html__('Educación', 'cavtheme'); ?></h3>
                            <p><strong><?php echo esc_html__('Ingeniería Multimedia', 'cavtheme'); ?></strong><br><?php echo esc_html__('Universidad Militar Nueva Granada · Bogotá, Colombia · 2012', 'cavtheme'); ?></p>
                            <p><strong><?php echo esc_html__('Curso de Introducción a la Nube', 'cavtheme'); ?></strong><br><?php echo esc_html__('Platzi · Certificado de finalización', 'cavtheme'); ?></p>
                        </div>
                        <div>
                            <h3><?php echo esc_html__('Contacto', 'cavtheme'); ?></h3>
                            <p><a href="tel:+5739765515">(+57) 397 655 515</a></p>
                            <p><a href="mailto:cavstirn@gmail.com">cavstirn@gmail.com</a></p>
                            <p><a href="https://www.linkedin.com/in/camilo-velosa-060a9324/" target="_blank" rel="noopener noreferrer">linkedin.com/in/camilo-velosa-060a9324</a></p>
                        </div>
                    </section>
                </article>
            <?php else : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class('web-development-content__entry'); ?>>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer();
