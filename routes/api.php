<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$router->group(['prefix'=>'/instituicoes'], function () use ($router) {

    $router->get('','Operacional\InstituicoesController@index');

});

$router->group(['prefix'=>'/convenios'], function () use ($router) {

    $router->get('','Operacional\ConveniosController@index');

});

$router->group(['prefix'=>'/simulador'], function () use ($router) {

    $router->post('','Operacional\SimuladorController@simular');

});


