<?php
namespace SBBiblio\Model;

/**
 * Contains properties of an inproceedings article
 */
class Article extends Publication
{
	/** Journal in which the article is published */
	public $journal;
	
	/** Pages of the article */
	public $pages;
	
	/**
	 * Creates a new article object.
	 * 
	 * @param string $key Unique identifier of the publication 
	 * @param array $authors List of authors of the publication
	 * @param string $title Title of the publication
	 * @param Journal $journal Journal in which the article is published
	 * @param string $pages Pages of the article
	 * @param string $month Month of the publication date
	 * @param string $year Year of the publication date
	 * @param string $abstract Abstract of the publication (optional)
	 * @param string $pdf Filename of the PDF (optional)
	 * @param string $note Additional notes of this publication (optional)
	 */
	function __construct($key, $authors, $title, Journal $journal, $pages, $month, $year, $abstract = NULL, $pdf = NULL, $note = NULL)
	{
		parent::__construct($key, $authors, $title, $month, $year, $abstract, $pdf, $note);
		$this->journal = $journal;
		$this->pages = $pages;
	}
}
?>
