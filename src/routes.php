<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Container;

return function(App $app, Container $di, array $settings){

    $di['notFoundHandler'] = function($di){

        return function(Request $request, Response $response) use ($di){

            return $di['Renderer']->render($response->withStatus(404), '404.phtml');

        };

    };

	$app->get('/', function(Request $request, Response $response){

		return $this['Renderer']->render($response, 'index.phtml', [
			'quote' => $this['MovieQuoteProvider']->getRandomQuote()
		]);

	});

};
