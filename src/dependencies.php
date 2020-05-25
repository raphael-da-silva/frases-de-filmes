<?php

use Slim\App;
use Slim\Container;

return static function(App $app, Container $di, array $settings){

    $di['MovieQuoteProvider'] = function($di){

        return new \MoviesQuotes\ArrayMovieQuoteProvider;

    };

    /**
     *
     * View
     *
     */
    $di['Renderer'] = function($di) use ($settings){

        return new \Slim\Views\PhpRenderer(
            $settings['renderer']['viewsPath'],
            [],
            $settings['renderer']['layout']
        );

    };

    /**
     *
     * Route actions
     *
     */
    $di['HomeAction'] = function($di){

        return new \MoviesQuotes\HomeAction(
            $di['MovieQuoteProvider'],
            $di['Renderer']
        );

    };
    
};
