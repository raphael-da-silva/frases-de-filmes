<?php

namespace MoviesQuotes;

use MoviesQuotes\QuoteProvider;

/**
 *
 * @author Raphael da Silva
 *
 */
class ArrayMovieQuoteProvider implements QuoteProvider
{

	public function getRandomQuote()
	{

		$quotes = require APP_ROOT . '/var/quotes.php';
		$quote  = $quotes[array_rand($quotes)];

		return $quote;

	}

}