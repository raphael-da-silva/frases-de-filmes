<?php

namespace MoviesQuotes;

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

	private $quote;
	private $view;

	public function __construct(
		QuoteProvider $quote,
		PhpRenderer $view
	){

		$this->quote = $quote;
		$this->view  = $view;

	}

	public function __invoke(Request $request, Response $response): Response
	{

		return $this->view->render($response, 'index.phtml', [
			'quote' => $this->quote->getRandomQuote()
		]);

	}

}