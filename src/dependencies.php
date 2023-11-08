<?php

use Slim\App;
use Slim\Container;

use MoviesQuotes\QuoteProvider;
use Slim\Views\PhpRenderer;
use MoviesQuotes\Actions\HomeAction;
use MoviesQuotes\Actions\QuotesListAction;

return static function(App $app, Container $di, array $settings){

    $di[QuoteProvider::class] = function($di){
        return new \MoviesQuotes\ArrayMovieQuoteProvider;
    };

    /**
     *
     * View
     *
     */
    $di[PhpRenderer::class] = function($di) use ($settings){
        return new PhpRenderer(
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
    $di[HomeAction::class] = function($di){
        return new HomeAction(
            $di[QuoteProvider::class],
            $di[PhpRenderer::class]
        );
    };

    $di[QuotesListAction::class] = function($di){
        return new QuotesListAction(
            $di[QuoteProvider::class],
            $di[PhpRenderer::class]
        );
    };
    
};
