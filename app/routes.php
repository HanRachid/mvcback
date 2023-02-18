<?php


use App\Http\Controllers\DatabaseToReactController;
use App\Http\Controllers\ReactToDatabaseController;
use App\Http\Controllers\RemoveFromDatabaseController;
use Routing\Router;

return function (Router $router) {
    $router->add(
        'GET',
        '/public/index.php/reactadd',
        [new ReactToDatabaseController($router), 'handle'],
    )->name('react-add');

    $router->add(
        'POST',
        '/public/index.php/react',
        [new DatabaseToReactController($router), 'handle'],
    )->name('react');

    $router->add(
        'POST',
        '/public/index.php/reactremove',
        [new RemoveFromDatabaseController($router), 'handle'],
    )->name('remove');
    $router->add(
        'GET',
        '/public/index.php',
        fn () => "routing test",
    )->name('react');
};