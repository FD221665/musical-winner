<?php
/**
 * Plugin Name: EO4MRV Core
 * Description: Registra la arquitectura de contenidos EO4MRV (CPTs, taxonomías, metacampos y assets UX/UI).
 * Version: 1.0.0
 * Author: EO4MRV
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', 'eo4mrv_register_content_architecture');
add_action('init', 'eo4mrv_register_meta_fields');
add_action('wp_enqueue_scripts', 'eo4mrv_enqueue_frontend_assets');

/**
 * Registra CPTs y taxonomías.
 */
function eo4mrv_register_content_architecture(): void
{
    $supports = ['title', 'editor', 'excerpt', 'thumbnail', 'revisions'];

    register_post_type('eo4mrv_resource', [
        'labels' => [
            'name' => __('Recursos', 'eo4mrv'),
            'singular_name' => __('Recurso', 'eo4mrv'),
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => $supports,
        'has_archive' => true,
        'rewrite' => ['slug' => 'recursos'],
    ]);

    register_post_type('eo4mrv_tutorial', [
        'labels' => [
            'name' => __('Tutoriales', 'eo4mrv'),
            'singular_name' => __('Tutorial', 'eo4mrv'),
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => $supports,
        'has_archive' => true,
        'rewrite' => ['slug' => 'tutoriales'],
    ]);

    register_post_type('eo4mrv_storymap', [
        'labels' => [
            'name' => __('Story Maps', 'eo4mrv'),
            'singular_name' => __('Story Map', 'eo4mrv'),
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-location-alt',
        'supports' => $supports,
        'has_archive' => true,
        'rewrite' => ['slug' => 'story-maps'],
    ]);

    register_post_type('eo4mrv_partner', [
        'labels' => [
            'name' => __('Socios', 'eo4mrv'),
            'singular_name' => __('Socio', 'eo4mrv'),
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title', 'editor', 'thumbnail', 'revisions'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'socios'],
    ]);

    register_taxonomy('resource_type', ['eo4mrv_resource'], [
        'label' => __('Tipo de recurso', 'eo4mrv'),
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    ]);

    register_taxonomy('resource_topic', ['eo4mrv_resource'], [
        'label' => __('Temática de recurso', 'eo4mrv'),
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    ]);

    register_taxonomy('resource_audience', ['eo4mrv_resource'], [
        'label' => __('Público objetivo', 'eo4mrv'),
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    ]);

    register_taxonomy('tutorial_level', ['eo4mrv_tutorial'], [
        'label' => __('Nivel del tutorial', 'eo4mrv'),
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    ]);

    register_taxonomy('tutorial_topic', ['eo4mrv_tutorial'], [
        'label' => __('Temática del tutorial', 'eo4mrv'),
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    ]);

    register_taxonomy('tutorial_tool', ['eo4mrv_tutorial'], [
        'label' => __('Herramienta del tutorial', 'eo4mrv'),
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    ]);

    register_taxonomy('knowledge_path', ['eo4mrv_resource', 'eo4mrv_tutorial'], [
        'label' => __('Ruta de conocimiento', 'eo4mrv'),
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    ]);
}

/**
 * Registra metacampos expuestos en REST.
 */
function eo4mrv_register_meta_fields(): void
{
    $resource_fields = [
        'file_url' => 'string',
        'file_format' => 'string',
        'language_code' => 'string',
        'publication_date' => 'string',
        'version' => 'string',
        'external_source' => 'string',
        'related_tutorial_id' => 'integer',
    ];

    foreach ($resource_fields as $meta_key => $type) {
        register_post_meta('eo4mrv_resource', $meta_key, [
            'single' => true,
            'show_in_rest' => true,
            'type' => $type,
            'auth_callback' => static function () {
                return current_user_can('edit_posts');
            },
        ]);
    }

    $tutorial_fields = [
        'estimated_duration' => 'string',
        'prerequisites' => 'string',
        'learning_objectives' => 'string',
        'step_count' => 'integer',
        'materials_url' => 'string',
        'dataset_related_id' => 'integer',
        'video_url' => 'string',
    ];

    foreach ($tutorial_fields as $meta_key => $type) {
        register_post_meta('eo4mrv_tutorial', $meta_key, [
            'single' => true,
            'show_in_rest' => true,
            'type' => $type,
            'auth_callback' => static function () {
                return current_user_can('edit_posts');
            },
        ]);
    }
}

/**
 * Carga estilos/JS del hero y ajustes visuales institucionales.
 */
function eo4mrv_enqueue_frontend_assets(): void
{
    $css_file = dirname(__DIR__) . '/assets/css/eo4mrv-theme.css';
    $js_file = dirname(__DIR__) . '/assets/js/eo4mrv-hero-parallax.js';

    wp_enqueue_style(
        'eo4mrv-theme',
        plugins_url('../assets/css/eo4mrv-theme.css', __FILE__),
        [],
        file_exists($css_file) ? (string) filemtime($css_file) : null
    );

    wp_enqueue_script(
        'eo4mrv-hero-parallax',
        plugins_url('../assets/js/eo4mrv-hero-parallax.js', __FILE__),
        [],
        file_exists($js_file) ? (string) filemtime($js_file) : null,
        true
    );
}
