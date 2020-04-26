<?php

namespace MoviesQuotes;

use MoviesQuotes\QuoteProvider;
use MoviesQuotes\Quote;

/**
 *
 * @author Raphael da Silva
 *
 */
class ArrayMovieQuoteProvider implements QuoteProvider
{

	private function readQuoteFromFile()
	{

		$quotes = require APP_ROOT . '/var/quotes.php';
		$quote  = $quotes[array_rand($quotes)];

		return $quote;

	}

	public function getRandomQuote(): Quote
	{

		$quote = $this->readQuoteFromFile();

		return new Quote(
			$quote['quote'],
			$quote['movie']
		);

	}

}