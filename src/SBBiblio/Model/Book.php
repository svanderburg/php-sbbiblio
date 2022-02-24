<?php
namespace SBBiblio\Model;

/**
 * Contains properties of a book or conference. 
 */
class Book
{
	/** Title of the book */
	public string $title;
	
	/** URL of the homepage of the book */
	public string $homepage;
	
	/** Name of the publisher */
	public string $publisher;
	
	/** Names of the editors */
	public string $editors;
	
	/** Location where the conference is held or the book is published */
	public string $location;
	
	/**
	 * Creates a new book object
	 * @param $title Title of the book
	 * @param $homepage URL of the homepage of the book
	 * @param $publisher Name of the publisher
	 * @param $editors Names of the editors
	 * @param $location Location where the conference is held or the book is published
	 */
	function __construct(string $title, string $homepage, string $publisher, string $editors, string $location)
	{
		$this->title = $title;
		$this->homepage = $homepage;
		$this->publisher = $publisher;
		$this->editors = $editors;
		$this->location = $location;
	}
}
?>
