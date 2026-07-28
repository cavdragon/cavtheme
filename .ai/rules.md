# CavTheme AI Rules

Siempre sigue estas reglas antes de escribir código.

## Objetivo

Desarrollar un tema WordPress moderno utilizando:

- WordPress nativo
- PHP 8+
- Vite
- SCSS
- JavaScript ES Modules
- Arquitectura modular
- Código limpio
- Alto rendimiento

Nunca generar código innecesario.

Siempre reutilizar clases existentes antes de crear nuevas.

---

## Estructura

No modificar la arquitectura existente.

Usar siempre:

inc/
src/
assets/
templates/
template-parts/

No crear archivos PHP fuera de estas carpetas.

---

## CSS

Nunca escribir CSS plano.

Todo el CSS debe escribirse únicamente en:

src/scss/

El CSS compilado nunca debe modificarse manualmente.

Para la Marca Personal, mantener una estÃ©tica elegante, premium, minimalista, tecnolÃ³gica y cinematogrÃ¡fica.

No usar colores saturados, neones excesivos, gradientes agresivos, efectos gamer ni decoraciÃ³n sin propÃ³sito.

Los acentos de color deben ser desaturados y cohesionados entre sÃ­. Priorizar contraste tipogrÃ¡fico, espacios amplios, luz sutil y movimiento contenido.

---

## JS

Todo JavaScript vive en:

src/js/

Usar módulos ES.

Nunca usar jQuery.

---

## PHP

Siempre usar clases.

Evitar funciones globales.

No escribir lógica directamente en header.php o footer.php.

La lógica debe vivir dentro de inc/.

---

## WordPress

Siempre utilizar funciones nativas.

Escapar todas las salidas.

Sanitizar todas las entradas.

Nunca consultar directamente la base de datos.

---

## Rendimiento

No cargar librerías innecesarias.

No duplicar consultas.

Usar lazy loading cuando sea posible.

Optimizar imágenes.

---

## Antes de crear código

La IA debe revisar primero si ya existe una solución dentro del proyecto.

Nunca duplicar componentes.

Siempre reutilizar.
