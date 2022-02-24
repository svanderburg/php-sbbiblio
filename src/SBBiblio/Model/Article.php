<?php
namespace SBBiblio\Model;

/**
 * Contains properties of an inproceedings article
 */
class Article extends Publication
{
	/** Journal in which the article is published */
	public Journal $journal;
	
	/** Pages of the article */
	public string $pages;
	
	/**
	 * Creates a new article object.
	 * 
	 * @param $key Unique identifier of the publication 
	 * @param $authors List of authors of the publication
	 * @param $title Title of the publication
	 * @param $journal Journal in which the article is published
	 * @param $pages Pages of the article
	 * @param $month Month of the publication date
	 * @param $year Year of the publication date
	 * @param $abstract Abstract of the publication (optional)
	 * @param $pdf Filename of the PDF (optional)
	 * @param $note Additional notes of this publication (optional)
	 */
	function __construct(string $key, array $authors, string $title, Journal $journal, string $pages, string $month, int $year, string $abstract = NULL, string $pdf = NULL, string $note = NULL)
	{
		parent::__construct($key, $authors, $title, $month, $year, $abstract, $pdf, $note);
		$this->journal = $journal;
		$this->pages = $pages;
	}
}
?>
