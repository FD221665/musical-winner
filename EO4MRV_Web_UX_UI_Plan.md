# EO4MRV – Propuesta UX/UI y arquitectura web institucional (WordPress + Kadence + Polylang)

## 1) Visión general

Este documento define una propuesta integral para el sitio institucional del proyecto europeo:

**EO4MRV – Strengthening Stakeholder Skills for Ecosystem and Carbon Monitoring, Reporting and Verification through Earth Observation**.

El enfoque de diseño combina:
- Imagen académica e institucional (referencia: portales universitarios y Horizon Europe).
- Claridad didáctica para perfiles no técnicos (administraciones, ONG, pymes).
- Estructura escalable para contenidos multilingües y recursos reutilizables.

---

## 2) Enfoque UX/UI (senior)

### Principios de experiencia de usuario
1. **Claridad por encima de complejidad**: cada página debe responder rápidamente a “qué es, para quién, y cómo participar”.
2. **Arquitectura orientada a tareas**: acceso directo a recursos, tutoriales y casos de uso.
3. **Confianza institucional**: diseño limpio, tipografía legible, jerarquía visual académica.
4. **Accesibilidad**: contraste adecuado, textos alternativos, navegación por teclado, estructura semántica.
5. **Escalabilidad multidioma**: contenidos equivalentes por idioma sin duplicar esfuerzo editorial.

### Estilo visual propuesto
- **Tono**: científico, moderno, sobrio.
- **Paleta principal**:
  - Verde ecosistema: `#2E7D32`
  - Azul observación terrestre: `#1565C0`
  - Azul profundo institucional: `#0D3B66`
  - Blanco base: `#FFFFFF`
  - Gris neutro para texto secundario: `#546E7A`
- **Tipografía recomendada**:
  - Encabezados: *Montserrat* / *Poppins*
  - Cuerpo de texto: *Inter* / *Source Sans 3*
- **Sistema visual**:
  - Iconografía lineal (MRV, carbono, satélite, inclusión digital, cooperación).
  - Tarjetas con sombra suave y bordes redondeados moderados.
  - Bloques alternos en blanco y azul/verde muy claro para ritmo visual.

---

## 3) Estructura de información (sitemap)

### Menú principal (header)
1. **Inicio**
2. **Sobre el proyecto**
3. **Objetivos**
4. **Recursos**
5. **Tutoriales**
6. **Story Maps**
7. **Socios**
8. **Noticias**
9. **Contacto**

### Menú secundario (utilidades)
- Selector de idioma (Polylang)
- Buscador
- CTA destacado: “Acceder a recursos”

---

## 4) Diseño por página

## 4.1 Página de inicio

### Estructura propuesta
1. **Hero principal**
   - Imagen satelital de ecosistemas (bosques/costas/uso del suelo).
   - Título: **EO4MRV**.
   - Subtítulo: “Fortaleciendo capacidades para el monitoreo de ecosistemas y carbono con Observación de la Tierra”.
   - Botones CTA:
     - “Explorar recursos”
     - “Ver tutoriales”

2. **Bloque de contexto rápido**
   - 3 columnas: problema, solución EO4MRV, impacto esperado.

3. **Objetivos clave (iconos)**
   - Mini versión de la página de objetivos.

4. **Recursos destacados**
   - Últimos handbooks, datasets y guías.

5. **Tutorial destacado**
   - Tarjeta grande del tutorial más consultado.

6. **Story map destacado**
   - Preview embebido del mapa interactivo principal.

7. **Socios (logos)**
   - Carrusel o grid institucional.

8. **Noticias recientes**
   - 3 últimas publicaciones.

9. **CTA final**
   - “Únete a la comunidad EO4MRV” + contacto.

---

## 4.2 Sobre el proyecto

### Contenido requerido
- Contexto europeo sobre monitoreo ambiental y carbono.
- Barreras actuales para el uso de datos satelitales (técnicas, organizativas, formativas).
- Relación con políticas climáticas y restauración ambiental.
- Rol de Copernicus y datos EO en la toma de decisiones.

### Estructura UX recomendada
- Introducción breve + infografía de problema/oportunidad.
- Sección “¿Por qué ahora?” con datos o cifras.
- Sección “¿A quién beneficia?” (administraciones, ONG, pymes, academia).

---

## 4.3 Objetivos

Diseñar como bloque visual con 5 tarjetas/iconos:
1. **Capacitación MRV**
2. **Monitoreo de carbono**
3. **Uso de datos Copernicus**
4. **Inclusión digital**
5. **Cooperación europea**

Cada tarjeta incluye:
- Icono
- Título corto
- Microdescripción de 2 líneas
- Enlace a contenido relacionado (recurso/tutorial/noticia)

---

## 4.4 Recursos

### Tipos de contenido
- Handbooks
- Datasets
- Guías
- Documentos descargables

### Experiencia UX
- Filtros por tipo, tema, idioma, fecha y público objetivo.
- Buscador interno.
- Tarjetas con metadatos visibles:
  - Tipo
  - Fecha
  - Idioma
  - Formato (PDF/CSV/XLS/ZIP)
- Botón “Descargar” + “Ver detalle”.

---

## 4.5 Tutoriales

### Estructura didáctica
- Listado por niveles: básico, intermedio, avanzado.
- Formato paso a paso.
- Campos sugeridos en ficha:
  - Objetivo de aprendizaje
  - Requisitos previos
  - Duración estimada
  - Herramientas necesarias
  - Archivos de apoyo

### Elementos UX clave
- Breadcrumbs claros.
- Barra de progreso dentro del tutorial.
- Descarga de materiales y enlace a dataset asociado.

---

## 4.6 Story Maps

### Sección interactiva
- Integración de iframes o embeds (ArcGIS StoryMaps u otra solución).
- Filtros por territorio, ecosistema o temática (carbono/restauración/monitorización).
- Ficha resumen debajo de cada mapa con:
  - Objetivo
  - Área geográfica
  - Datos utilizados
  - Lecciones aprendidas

---

## 4.7 Socios del proyecto

Cards con logo + descripción breve de:
- **USE Earth (Portugal)**
- **NOVA FCSH (Portugal)**
- **GBM Solutions (Grecia)**
- **Ege University (Turquía)**

Cada card incluye:
- Logo
- País
- Rol en EO4MRV
- Enlace a web oficial

---

## 4.8 Noticias

- Blog institucional del proyecto.
- Categorías sugeridas:
  - Eventos
  - Resultados
  - Formación
  - Comunicados
- Plantilla de post con bloque “Recursos relacionados”.

---

## 4.9 Contacto

### Elementos mínimos
- Formulario (nombre, email, organización, mensaje, consentimiento RGPD).
- Correo institucional del proyecto.
- Mapa o información de coordinación.

### Recomendación técnica
- Formularios con plugin compatible (WPForms/Fluent Forms/Contact Form 7).
- Checkbox legal y política de privacidad enlazada.

---

## 5) Logo conceptual EO4MRV

### Concepto creativo
Un isotipo que combine:
- **Órbita/satélite** (observación terrestre)
- **Hoja o copa de árbol** (ecosistema)
- **Curva de carbono** (monitorización y MRV)

### Propuesta visual
- Símbolo circular (representa planeta + ciclo MRV).
- Segmento en verde (ecosistemas) y segmento en azul (datos/tecnología).
- Tipografía sans serif robusta para “EO4MRV”.
- Submarca opcional en pequeño: “Earth Observation for MRV Skills”.

### Versiones necesarias
- Horizontal (principal)
- Vertical (apilada)
- Monocromo
- Fondo oscuro / fondo claro
- Favicon simplificado

---

## 6) Estructura del menú (detalle funcional)

### Header
- Izquierda: logo EO4MRV
- Centro: menú principal
- Derecha:
  - Selector idioma (ES/EN/EL/TR)
  - Botón CTA “Recursos”

### Comportamiento responsive
- Menú hamburguesa en móvil.
- CTA fijo visible en primera capa.
- Selector de idioma dentro del menú móvil en posición superior.

---

## 7) Estructura del footer

### Footer columna 1
- Logo EO4MRV
- Texto breve misión del proyecto

### Footer columna 2
- Enlaces rápidos:
  - Sobre el proyecto
  - Recursos
  - Tutoriales
  - Noticias
  - Contacto

### Footer columna 3
- Socios (lista breve enlazada)
- Newsletter (opcional)

### Footer legal
- Financiación UE (texto y emblema según guía de comunicación)
- Política de privacidad
- Política de cookies
- Aviso legal
- Accesibilidad

---

## 8) Arquitectura WordPress (Kadence + Polylang)

## 8.1 Configuración base
- **CMS**: WordPress
- **Tema**: Kadence
- **Multidioma**: Polylang
- **Plugins recomendados adicionales**:
  - SEO: Rank Math o Yoast
  - Caché: LiteSpeed Cache / WP Rocket
  - Seguridad: Wordfence
  - Formularios: WPForms / Fluent Forms
  - Accesibilidad: plugin de mejoras WCAG

## 8.2 Tipos de contenido (CPT)
1. **Recursos** (`eo4mrv_resource`)
2. **Tutoriales** (`eo4mrv_tutorial`)
3. **Story Maps** (`eo4mrv_storymap`)
4. **Socios** (`eo4mrv_partner`)

Noticias se mantiene como `post` estándar.

---

## 9) Estructura de base de datos para recursos y tutoriales

> Nota: en WordPress esto se implementa principalmente con `wp_posts`, `wp_postmeta`, `wp_terms`, `wp_term_taxonomy`, `wp_term_relationships` mediante CPT + taxonomías + metacampos.

## 9.1 Modelo para Recursos

### CPT
- `eo4mrv_resource`

### Taxonomías sugeridas
- `resource_type` (handbook, dataset, guía, documento)
- `resource_topic` (carbono, restauración, biodiversidad, MRV)
- `resource_audience` (administración, ONG, pyme, academia)

### Metacampos clave (wp_postmeta)
- `file_url`
- `file_format` (pdf/csv/xlsx/zip)
- `language_code` (es/en/el/tr)
- `publication_date`
- `version`
- `external_source` (si aplica)
- `related_tutorial_id`

## 9.2 Modelo para Tutoriales

### CPT
- `eo4mrv_tutorial`

### Taxonomías sugeridas
- `tutorial_level` (básico/intermedio/avanzado)
- `tutorial_topic` (Copernicus, carbono, ecosistemas, SIG)
- `tutorial_tool` (QGIS, SNAP, etc.)

### Metacampos clave
- `estimated_duration`
- `prerequisites`
- `learning_objectives`
- `step_count`
- `materials_url`
- `dataset_related_id`
- `video_url` (opcional)

## 9.3 Relación entre recursos y tutoriales
- Relación por metacampos cruzados (`related_tutorial_id`, `dataset_related_id`).
- Alternativa robusta: taxonomía compartida `knowledge_path` para agrupar itinerarios formativos.

---

## 10) Estrategia multidioma (Polylang)

### Fase 1
- Español como idioma principal.

### Fase 2
- Inglés, griego y turco.

### Recomendaciones
- Crear plantilla base ES y clonar estructura por idioma.
- Traducir slugs y metadatos SEO.
- Validar coherencia de enlaces entre traducciones.
- Asegurar que recursos descargables indiquen idioma de archivo.

---

## 11) Responsive y accesibilidad

### Breakpoints sugeridos
- Desktop: `>= 1200px`
- Tablet: `768px - 1199px`
- Móvil: `< 768px`

### Criterios clave
- Navegación táctil y botones de tamaño adecuado.
- Textos de mínimo 16px en móvil.
- Contraste WCAG AA.
- Navegación por teclado y foco visible.
- Alt text descriptivo en imágenes satelitales/mapas.

---

## 12) Roadmap de implementación recomendado

1. Configuración WordPress + Kadence + Polylang.
2. Definición global de estilos (colores, tipografía, botones).
3. Creación de CPTs y taxonomías (recursos/tutoriales/storymaps/socios).
4. Maquetación de páginas institucionales.
5. Carga de contenido inicial en español.
6. Validación UX, responsive y accesibilidad.
7. Activación progresiva de EN/EL/TR.

---

## 13) Resultado esperado

Un portal institucional EO4MRV con estética científica y navegación clara, preparado para escalar en contenido, idiomas y activos formativos, alineado con la comunicación de proyectos europeos y con una arquitectura sólida para recursos y tutoriales.
