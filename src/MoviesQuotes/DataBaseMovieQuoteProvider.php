<?php

namespace MoviesQuotes;

use MoviesQuotes\QuoteProvider;
use MoviesQuotes\Quote;
use PDO;

/**
 *
 * @author Raphael da Silva
 *
 */
class DataBaseMovieQuoteProvider implements QuoteProvider
{

	private $pdo;

	public function __construct(
		PDO $pdo
	){

		$this->pdo = $pdo;

	}

	public function getRandomQuote(): Quote
	{

		// TODO: buscar frases de um banco de dados usando a PDO.

	}

}