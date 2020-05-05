<?php

use PHPUnit\Framework\TestCase;
use MoviesQuotes\Quote;

/**
 *
 * @author Raphael da Silva
 *
 */
class QuoteTest extends TestCase
{

	public function testObjectGettersShouldReturnExpectedValues()
	{

		$movie = 'Homem-aranha';
		$text  = 'Frase do filme';
		$quote = new Quote($text, $movie);

		$this->assertEquals($quote->getMovie(), $movie);
		$this->assertEquals($quote->getText(), $text);

	}

}