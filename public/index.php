<?php

require_once __DIR__ . '/../app/Config/AppConfig.php';

/*
|--------------------------------------------------------------------------
| LOAD CORE, MODELS, CONTROLLERS
|--------------------------------------------------------------------------
*/
foreach (glob(__DIR__ . '/../app/Core/*.php') as $file) require_once $file;
foreach (glob(__DIR__ . '/../app/Models/*.php') as $file) require_once $file;
foreach (glob(__DIR__ . '/../app/Controllers/*.php') as $file) require_once $file;

/*
|--------------------------------------------------------------------------
| ROUTER TANPA HTACCESS (BERBASIS ?page=)
|--------------------------------------------------------------------------
*/

$page = $_GET['page'] ?? 'home';   // Default: landing page
$method = $_SERVER['REQUEST_METHOD'];

switch ($page) {

    /* Landing Page */
    case 'home':
        (new LandingController)->index();
        break;

    /* Auth */
    case 'login':
        if ($method === 'GET') {
            (new AuthController)->loginPage();
        } else if ($method === 'POST') {
            (new AuthController)->login();
        }
        break;

    case 'logout':
        (new AuthController)->logout();
        break;

    /* Dashboard */
    case 'dashboard':
        (new DashboardController)->index();
        break;

    /* 404 */
    default:
        http_response_code(404);
        echo "<h1 style='font-family: Arial; padding: 20px;'>404 - Page Not Found</h1>";
}
