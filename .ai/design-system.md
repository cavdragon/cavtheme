# Design System

Todo el sitio utiliza un sistema de diseño consistente.

## Colores

Definir siempre variables SCSS.

Nunca usar colores escritos directamente.

Ejemplo

$primary
$secondary
$accent

### DirecciÃ³n visual de Marca Personal

La paleta debe ser oscura, neutra y desaturada.

Usar negros suaves, grafito, blanco roto, grises frÃ­os y acentos apagados.

Los acentos pueden diferenciar secciones, pero deben mantener luminosidad y saturaciÃ³n contenidas para pertenecer al mismo universo visual.

Evitar:

- Colores neÃ³n.
- Gradientes con alto contraste o apariencia gamer.
- MÃ¡s de un acento dominante por secciÃ³n.
- Combinaciones arcoÃ­ris entre componentes contiguos.

Los fondos pueden usar gradientes tonales muy sutiles, sombras y textura de luz difusa para aportar profundidad cinematogrÃ¡fica.

---

## Espaciados

Usar múltiplos de 8.

8
16
24
32
48
64
80

---

## Tipografía

Utilizar una sola escala.

H1

48px

H2

36px

H3

28px

Texto

18px

Pequeño

16px

---

## Bordes

Border radius:

4
8
12
16

---

## Sombras

Crear únicamente variables reutilizables.

---

## Botones

Todos los botones deben reutilizar:

_button.scss

Nunca crear estilos nuevos.

---

## Cards

Utilizar:

_card.scss

---

## Grid

Todo el layout utiliza CSS Grid.

Flex únicamente para componentes internos.

---

## Responsive

Mobile First.

Breakpoints

576

768

992

1200

1400

---

## Familias tipogrÃ¡ficas de Marca Personal

Usar Archivo Black exclusivamente para H1, H2, H3, H4 y H5.

Usar Rubik para pÃ¡rrafos, enlaces, botones, formularios, etiquetas y todo texto de interfaz.

No introducir familias adicionales sin una decisiÃ³n explÃ­cita de diseÃ±o.
