<?php
namespace SBBiblio\Model;

/**
 * Contains properties of a journal
 */
class Journal
{
	/** Title of the journal */
	public string $title;
	
	/** Volume of the journal */
	public int $volume;
	
	/** Number of the journal */
	public ?int $number;
	
	/** URL of the homepage of the journal */
	public string $homepage;
	
	/** Name of the publisher */
	public string $publisher;
	
	/**
	 * Creates a new journal object
	 * @param $title Title of the book
	 * @param $volume Volume of the book
	 * @param $number Number of the book (optional)
	 * @param $homepage URL of the homepage of the book
	 * @param $publisher Name of the publisher
	 */
	function __construct(string $title, int $volume, ?int $number, string $homepage, string $publisher)
	{
		$this->title = $title;
		$this->volume = $volume;
		$this->number = $number;
		$this->homepage = $homepage;
		$this->publisher = $publisher;
	}
}
?>
