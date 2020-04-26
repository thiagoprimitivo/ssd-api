<?php

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

// API route group
$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('systems', 'SecuritySystemController@index');

    $router->get('systems/{id}', 'SecuritySystemController@show');

    $router->post('systems', 'SecuritySystemController@store');

    $router->put('systems/{id}', 'SecuritySystemController@update');

    $router->post('systems/search', 'SecuritySystemController@search');
});
