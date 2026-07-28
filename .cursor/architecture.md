# Arquitectura CavTheme

El proyecto sigue una arquitectura modular.

## Bootstrap

functions.php

↓

Application::boot()

↓

Config

↓

Theme

↓

AssetManager

↓

Componentes

---

## Carpetas

inc/

Contiene toda la lógica PHP.

core/

Configuración general.

theme/

Funciones del tema.

assets/

Carga de CSS y JS mediante Vite.

helpers/

Funciones reutilizables.

ajax/

Endpoints AJAX.

api/

REST API.

admin/

Administración.

integrations/

Integraciones externas.

---

src/

Código fuente.

scss/

Estilos.

js/

JavaScript.

---

assets/

Código compilado por Vite.

Nunca editar manualmente.
