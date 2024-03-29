<?php

namespace MoviesQuotes;

use MoviesQuotes\QuoteProvider;
use MoviesQuotes\Quote;
use PDO as DataBase;
use Exception as NotImplementedException;

/**
 *
 * @author Raphael da Silva
 *
 */
class DataBaseMovieQuoteProvider implements QuoteProvider
{
	public function __construct(
		private DataBase $db
	){}

	public function getRandomQuote(): Quote
	{
		throw new NotImplementedException('buscar frase de um banco de dados usando a PDO.');
	}

	public function getAllQuotes(): array
	{
		throw new NotImplementedException('buscar as frases de um banco de dados usando a PDO.');
	}
}