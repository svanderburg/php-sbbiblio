<?php
/**
 * Contains properties of a journal
 */
class Journal
{
	/** Title of the journal */
	public $title;
	
	/** Volume of the journal */
	public $volume;
	
	/** Number of the journal */
	public $number;
	
	/** URL of the homepage of the journal */
	public $homepage;
	
	/** Name of the publisher */
	public $publisher;
	
	/**
	 * Creates a new journal object
	 * @param string $title Title of the book
	 * @param string $volume Volume of the book
	 * @param string $number Number of the book
	 * @param string $homepage URL of the homepage of the book
	 * @param string $publisher Name of the publisher
	 */
	function __construct($title, $volume, $number, $homepage, $publisher)
	{
		$this->title = $title;
		$this->volume = $volume;
		$this->number = $number;
		$this->homepage = $homepage;
		$this->publisher = $publisher;
	}
}
?>
