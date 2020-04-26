<?php

namespace MoviesQuotes;

/**
 *
 * @author Raphael da Silva
 *
 */
class Quote
{

	private $text;
	private $movie;

	public function __construct(
		string $text,
		string $movie
	){

		$this->text  = $text;
		$this->movie = $movie;

	}

	public function getText(): string
	{

		return $this->text;

	}

	public function getMovie(): string
	{

		return $this->movie;

	}

}