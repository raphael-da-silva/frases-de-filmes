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
	private array $quotes;

	public function __construct()
	{
		$this->quotes = require APP_ROOT . '/var/quotes.php';
	}

	private function readArrayFromFile(): array
	{
		$quote = $this->quotes[array_rand($this->quotes)];
		return $quote;
	}

	private function createQuoteFromArray (array $quote): Quote
	{
		return new Quote(
			$quote['quote'],
			$quote['movie']
		);
	}

	public function getRandomQuote(): Quote
	{
		$quote = $this->readArrayFromFile();
		$quote = $this->createQuoteFromArray($quote);
		
		return $quote;
	}

	public function getAllQuotes(): array
	{
		$all = [];

		foreach ($this->quotes as $quote){
			$all[] = $this->createQuoteFromArray($quote);
		}

		return $all;
	}
}