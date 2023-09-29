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

	private $db;

	public function __construct(
		DataBase $db
	){

		$this->db = $db;

	}

	public function getRandomQuote(): Quote
	{

		throw new NotImplementedException('buscar frases de um banco de dados usando a PDO.');

	}

}