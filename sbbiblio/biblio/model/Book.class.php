<?php
/**
 * Contains properties of a book or conference. 
 */
class Book
{
	/** Title of the book */
	public $title;
	
	/** URL of the homepage of the book */
	public $homepage;
	
	/** Name of the publisher */
	public $publisher;
	
	/** Names of the editors */
	public $editors;
	
	/** Location where the conference is held or the book is published */
	public $location;
	
	/**
	 * Creates a new book object
	 * @param string $title Title of the book
	 * @param string $homepage URL of the homepage of the book
	 * @param string $publisher Name of the publisher
	 * @param string $editors Names of the editors
	 * @param string $location Location where the conference is held or the book is published
	 */
	function __construct($title, $homepage, $publisher, $editors, $location)
	{
		$this->title = $title;
		$this->homepage = $homepage;
		$this->publisher = $publisher;
		$this->editors = $editors;
		$this->location = $location;
	}
}
?>
