<?php
namespace SBBiblio\Model;

/**
 * Contains properties of an inproceedings article
 */
class InProceedings extends Publication
{	
	/** Book/conference in which the article is published */
	public Book $book;
	
	/**
	 * Creates a new inproceedings object.
	 *
	 * @param $key Unique identifier of the publication
	 * @param $authors List of authors of the publication
	 * @param $title Title of the publication
	 * @param $book Book/conference in which the article is published
	 * @param $month Month of the publication date
	 * @param $year Year of the publication date
	 * @param $abstract Abstract of the publication (optional)
	 * @param $pdf Filename of the PDF (optional)
	 * @param $note Additional notes of this publication (optional)
	 */
	function __construct(string $key, array $authors, string $title, Book $book, string $month, int $year, string $abstract = NULL, string $pdf = NULL, string $note = NULL)
	{
		parent::__construct($key, $authors, $title, $month, $year, $abstract, $pdf, $note);
		$this->book = $book;
	}
}
?>
