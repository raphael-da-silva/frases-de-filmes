<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Container;
use MoviesQuotes\Actions\HomeAction;
use MoviesQuotes\Actions\QuotesListAction;

return static function(App $app, Container $di, array $settings){

    $di['notFoundHandler'] = function($di){

        return function(Request $request, Response $response) use ($di){

            return $di['Renderer']->render($response->withStatus(404), '404.phtml');

        };

    };

	$app->get('/', $di[HomeAction::class]);
    $app->get('/list', $di[QuotesListAction::class]);

};
