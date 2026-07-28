# WordPress Guidelines

El tema debe ser completamente compatible con WordPress.

## Hooks

Siempre utilizar acciones y filtros.

Nunca modificar el núcleo.

---

## Templates

Utilizar template-parts.

No duplicar código.

---

## Sanitización

Siempre:

esc_html()

esc_url()

esc_attr()

wp_kses_post()

sanitize_text_field()

---

## Traducciones

Siempre utilizar:

__()

_e()

esc_html__()

---

## Assets

Todos los assets se cargan mediante:

AssetManager

Nunca usar wp_enqueue directamente fuera de esa clase.

---

## Consultas

Usar WP_Query.

Siempre llamar wp_reset_postdata().

---

## Seguridad

Nunca confiar en datos del usuario.

Verificar Nonces.

Escapar toda salida.
