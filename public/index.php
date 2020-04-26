<?php

/*=========================================================
=            Projeto feito com o Slim Skeleton            =
=========================================================*/

/**
 *
 * Diretório raiz
 *
 */
define('APP_ROOT', __DIR__ . '/../');

/**
 *
 * Autoloader
 *
 */
require APP_ROOT . '/vendor/autoload.php';

/**
 *
 * Skeleton config
 *
 */
$settings  = require APP_ROOT . '/src/settings.php';
$app 	   = new \Slim\App($settings);
$container = $app->getContainer();

// Remoção dos handlers padrões de erro
unset($container['errorHandler']);
unset($container['phpErrorHandler']);

$dependencies = require APP_ROOT . '/src/dependencies.php';
$dependencies($app, $container, $settings['app']);

$middleware = require APP_ROOT . '/src/middleware.php';
$middleware($app, $container, $settings['app']);

$routes = require APP_ROOT . '/src/routes.php';
$routes($app, $container, $settings['app']);

$app->run();