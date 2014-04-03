<?php
require_once("Publication.class.php");
require_once("Book.class.php");

/**
 * Contains properties of an inproceedings article
 */
class InProceedings extends Publication
{	
	/** Book/conference in which the article is published */
	public $book;
	
	/**
	 * Creates a new inproceedings object.
	 * 
	 * @param string $key Unique identifier of the publication 
	 * @param array $authors List of authors of the publication
	 * @param string $title Title of the publication
	 * @param Book $book Book/conference in which the article is published
	 * @param string $month Month of the publication date
	 * @param string $year Year of the publication date
	 * @param string $abstract Abstract of the publication (optional)
	 * @param string $pdf Filename of the PDF (optional)
	 * @param string $note Additional notes of this publication (optional)
	 */
	function __construct($key, $authors, $title, Book $book, $month, $year, $abstract = NULL, $pdf = NULL, $note = NULL)
	{
		parent::__construct($key, $authors, $title, $month, $year, $abstract, $pdf, $note);
		$this->book = $book;			
	}
}
?>
