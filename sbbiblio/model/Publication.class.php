<?php
/**
 * Contains generic properties of a publication
 */
class Publication
{
	/** Unique identifier of the publication */
	public $key;
	
	/** List of authors of the publication */
	public $authors;
	
	/** Title of the publication */
	public $title;
	
	/** Month of the publication date */
	public $month;
	
	/** Year of the publication date */
	public $year;
	
	/** Abstract of the publication */
	public $abstract;
	
	/** Filename of the PDF */
	public $pdf;
	
	/** Additional notes of this publication */
	public $note;
	
	/**
	 * Creates a new publication object
	 * 
	 * @param string $key Unique identifier of the publication 
	 * @param array $authors List of authors of the publication
	 * @param string $title Title of the publication
	 * @param string $month Month of the publication date
	 * @param string $year Year of the publication date
	 * @param string $abstract Abstract of the publication (optional)
	 * @param string $pdf Filename of the PDF (optional)
	 * @param string $note Additional notes of this publication (optional)
	 */
	function __construct($key, array $authors, $title, $month, $year, $abstract = NULL, $pdf = NULL, $note = NULL)
	{
		$this->key = $key;
		$this->authors = $authors;
		$this->title = $title;
		$this->month = $month;
		$this->year = $year;
		$this->abstract = $abstract;
		$this->pdf = $pdf;
		$this->note = $note;
	}
}
?>
