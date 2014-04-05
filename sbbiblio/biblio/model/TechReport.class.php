<?php
require_once("Publication.class.php");
require_once("Institute.class.php");

/**
 * Contains properties of a technical report
 */
class TechReport extends Publication
{
	/** Technical report number */
	public $number;
	
	/** Institute that publishes the technical report */
	public $institute;
	
	/**
	 * @param string $key Unique identifier of the publication 
	 * @param array $authors List of authors of the publication
	 * @param string $title Title of the publication
	 * @param string $month Month of the publication date
	 * @param string $year Year of the publication date
	 * @param string $number Technical report number
	 * @param Institute $institute Institute that publishes the technical report
	 * @param string $abstract Abstract of the publication (optional)
	 * @param string $pdf Filename of the PDF (optional)
	 * @param string $note Additional notes of this publication (optional)
	 */
	function __construct($key, $authors, $title, $month, $year, $number, Institute $institute, $abstract = NULL, $pdf = NULL, $note = NULL)
	{
		parent::__construct($key, $authors, $title, $month, $year, $abstract, $pdf, $note);
		$this->number = $number;
		$this->institute = $institute;
	}
}
?>
