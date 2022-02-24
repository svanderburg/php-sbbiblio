<?php
namespace SBBiblio\Model;

/**
 * Contains generic properties of a publication
 */
class Publication
{
	/** Unique identifier of the publication */
	public string $key;
	
	/** List of authors of the publication */
	public array $authors;
	
	/** Title of the publication */
	public string $title;
	
	/** Month of the publication date */
	public string $month;
	
	/** Year of the publication date */
	public int $year;
	
	/** Abstract of the publication (optional) */
	public ?string $abstract;
	
	/** Filename of the PDF (optional) */
	public ?string $pdf;
	
	/** Additional notes of this publication (optional) */
	public ?string $note;
	
	/**
	 * Creates a new publication object
	 *
	 * @param $key Unique identifier of the publication 
	 * @param $authors List of authors of the publication
	 * @param $title Title of the publication
	 * @param $month Month of the publication date
	 * @param $year Year of the publication date
	 * @param $abstract Abstract of the publication (optional)
	 * @param $pdf Filename of the PDF (optional)
	 * @param $note Additional notes of this publication (optional)
	 */
	function __construct(string $key, array $authors, string $title, string $month, int $year, string $abstract = NULL, string $pdf = NULL, string $note = NULL)
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
