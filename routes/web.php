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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/saludo/{nombre}', function($nombre){
    return 'Hola mi nombre es ' .$nombre;
});

$router->get('/calcular/{edad}', function($edad){
    if($edad > 0 && $edad < 18){
        return 'Eres menor de edad';

    }elseif($edad >= 18 && $edad <=100){
        return 'Eres mayor de edad';
    }else{
        return 'Edad erronea';
    }
});




$router->post('/saludo', function(){
    return 'Hola cree esto Jose Luis ';
});

$router->put('/saludo', function(){
    return 'Hola soy Jose Luis estoy modificando ';
});

$router->delete('/saludo', function(){
    return 'Hola soy Jose Luis estoy borrando ';
});

