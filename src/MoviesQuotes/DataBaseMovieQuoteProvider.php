<?php

namespace MoviesQuotes;

use MoviesQuotes\QuoteProvider;
use MoviesQuotes\Quote;
use PDO as DataBase;

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

		// TODO: buscar frases de um banco de dados usando a PDO.

	}

}