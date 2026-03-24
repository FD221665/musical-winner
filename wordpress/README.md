# Implementación técnica EO4MRV (WordPress/Kadence)

Este paquete aterriza en código los elementos principales del plan UX/UI:

- CPTs para recursos, tutoriales, story maps y socios.
- Taxonomías para filtros y rutas de aprendizaje.
- Metacampos para modelo de datos de recursos/tutoriales.
- Hero 3D parallax accesible.
- Footer institucional UE en azul `#005F99` sin línea de copyright.

## Estructura

- `mu-plugins/eo4mrv-core.php`: registro de arquitectura y carga de assets.
- `assets/css/eo4mrv-theme.css`: estilos globales EO4MRV.
- `assets/js/eo4mrv-hero-parallax.js`: parallax progresivo por scroll.

## Uso

1. Copiar `mu-plugins/eo4mrv-core.php` a `wp-content/mu-plugins/`.
2. Copiar carpeta `assets/` a `wp-content/eo4mrv-assets/` **o** mantener esta estructura y ajustar rutas en el plugin.
3. En el editor Kadence, asignar clases:
   - Hero principal: `eo4mrv-hero`
   - Contenedor de texto del hero: `eo4mrv-hero-content`
4. Para el bloque institucional UE en footer, usar un bloque HTML con clase `eo4mrv-footer-eu`.

## HTML sugerido para footer UE

```html
<div class="eo4mrv-footer-eu">
  <img src="/ruta/logo-ue.png" alt="Bandera de la Unión Europea" />
  <p>
    Este proyecto ha sido financiado con el apoyo de la Comisión Europea.
    Esta publicación refleja únicamente las opiniones del autor, y la Comisión no se hace responsable del uso
    que pueda hacerse de la información aquí difundida.
  </p>
</div>
```
