<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    // 1. Asegúrate de incluir todas las rutas que React usará.
    // Si tienes rutas de login/logout fuera de /api, agrégalas aquí.
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout'],

    'allowed_methods' => ['*'],

    // 2. IMPORTANTE: Pon la URL de tu app de React (ej: localhost:5173 o 3000)
    // No uses '*' si supports_credentials es true.
    'allowed_origins' => ['http://localhost:5173'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    // 3. VITAL: Cambia a true para permitir el flujo de cookies/sesiones.
    'supports_credentials' => true,
];
