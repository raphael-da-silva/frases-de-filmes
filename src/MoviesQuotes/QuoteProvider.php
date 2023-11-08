<?php

namespace MoviesQuotes;

/**
 *
 * @author Raphael da Silva
 *
 */
interface QuoteProvider
{
	public function getRandomQuote(): Quote;

	public function getAllQuotes(): array;
}