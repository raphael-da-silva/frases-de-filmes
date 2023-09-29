<?php

namespace MoviesQuotes\Actions;

use MoviesQuotes\QuoteProvider;
use Slim\Views\PhpRenderer;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 *
 * @author Raphael da Silva
 *
 */
class HomeAction
{
	public function __construct(
		private QuoteProvider $quote,
		private PhpRenderer $view
	){}

	public function __invoke(Request $request, Response $response): Response
	{
		return $this->view->render($response, 'index.phtml', [
			'quote' => $this->quote->getRandomQuote()
		]);
	}
}