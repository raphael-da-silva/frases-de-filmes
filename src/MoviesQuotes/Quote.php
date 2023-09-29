<?php

namespace MoviesQuotes;

/**
 *
 * @author Raphael da Silva
 *
 */
class Quote
{
	public function __construct(
		private string $text,
		private string $movie
	){}

	public function getText(): string
	{
		return $this->text;
	}

	public function getMovie(): string
	{
		return $this->movie;
	}
}