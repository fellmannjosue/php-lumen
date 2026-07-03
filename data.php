<?php
/** Datos del portal: Lumen (framework real, micro-Laravel). */

function portal_data(): array
{
    $FW = [
        'name'    => 'Lumen',
        'tagline' => 'El "Laravel ligero" para microservicios/APIs. Fácil si ya sabes Laravel. Nota: el propio equipo de Laravel hoy recomienda usar Laravel normal.',
        'accent'  => '#F0821E',
        'accent2' => '#D97014',
        'site'    => 'https://lumen.laravel.com',
        'kind'    => 'Framework real',
    ];
    $functions = [
        ['icon' => '🧭', 'title' => 'Enrutamiento', 'live' => true,
         'desc' => 'Router de Lumen (esta página y /api están enrutadas por Lumen).',
         'code' => "\$router->get('/saludo/{nombre}', function (\$nombre) {\n    return \"Hola \$nombre\";\n});"],
        ['icon' => '🎨', 'title' => 'Respuestas / Vistas', 'live' => true,
         'desc' => 'El handler devuelve HTML renderizado. Esta página se sirve así.',
         'code' => "return response(\$html);"],
        ['icon' => '🔌', 'title' => 'API JSON', 'live' => true,
         'desc' => 'response()->json() — el fuerte de Lumen. Aquí funciona de verdad.',
         'code' => "return response()->json([\n    'mensaje' => 'Hola Mundo',\n]);",
         'link' => 'api', 'linkText' => 'Probar el endpoint JSON (ruta real /api) →'],
        ['icon' => '✅', 'title' => 'Validación', 'live' => true,
         'desc' => 'Validación integrada de Lumen. Aquí se valida un correo real.',
         'code' => "\$this->validate(\$request, [\n    'email' => 'required|email',\n]);",
         'form' => true],
        ['icon' => '🗄️', 'title' => 'Eloquent', 'live' => false,
         'desc' => 'ORM Eloquent (opcional en Lumen) para consultar la base de datos.',
         'code' => "\$usuarios = User::where('activo', 1)->get();"],
    ];
    $compare = [
        ['Symfony','Enterprise, modular','Alta','Alto (corporativo)','Proyectos grandes'],
        ['Laravel','Full-stack, todo incluido','Media-alta','Muy alto (#1)','Apps modernas'],
        ['Laminas','Modular corporativo','Alta','Bajo (en declive)','Legacy empresarial'],
        ['Yii2','Full-stack + Gii','Media','Medio (regional)','Apps rápidas'],
        ['CakePHP','Convención sobre config.','Media','Modesto/estable','CRUD clásico'],
        ['Phalcon','Extensión C, rapidísimo','Media-alta (setup)','Nicho','Rendimiento extremo'],
        ['CodeIgniter','Ligero, poca magia','Baja','Medio (bajando)','Proyectos pequeños'],
        ['Slim','Micro-framework','Baja','Nicho (por diseño)','APIs pequeñas'],
        ['Lumen','Micro-Laravel','Baja','En declive','Microservicios (obsoleto)'],
    ];
    return compact('FW', 'functions', 'compare');
}
