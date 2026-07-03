<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

require __DIR__ . '/../data.php';

// Página principal (enrutada por Lumen) con validación real de correo
$router->get('/', function () {
    extract(portal_data()); // $FW, $functions, $compare
    $formResult = null;
    $email = request()->query('email');
    if ($email !== null) {
        $email = trim((string) $email);
        $ok = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
        $formResult = $ok
            ? ['ok' => true,  'msg' => "✓ '$email' es un correo válido."]
            : ['ok' => false, 'msg' => "✗ '$email' no es un correo válido."];
    }
    ob_start();
    include __DIR__ . '/../templates/page.php';
    return ob_get_clean();
});

// Ruta REAL de API JSON
$router->get('/api', function () {
    $FW = portal_data()['FW'];
    return response()->json([
        'framework' => $FW['name'],
        'mensaje'   => 'Hola Mundo desde un endpoint JSON',
        'hora'      => date('c'),
        'ok'        => true,
    ]);
});
