<?php
namespace SBBiblio\Model;

/**
 * Contains properties of a technical report
 */
class TechReport extends Publication
{
	/** Technical report number */
	public string $number;
	
	/** Institute that publishes the technical report */
	public $institute;
	
	/**
	 * @param $key Unique identifier of the publication
	 * @param $authors List of authors of the publication
	 * @param $title Title of the publication
	 * @param $month Month of the publication date
	 * @param $year Year of the publication date
	 * @param $number Technical report number
	 * @param $institute Institute that publishes the technical report
	 * @param $abstract Abstract of the publication (optional)
	 * @param $pdf Filename of the PDF (optional)
	 * @param $note Additional notes of this publication (optional)
	 */
	function __construct(string $key, array $authors, string $title, string $month, int $year, string $number, Institute $institute, string $abstract = NULL, string $pdf = NULL, string $note = NULL)
	{
		parent::__construct($key, $authors, $title, $month, $year, $abstract, $pdf, $note);
		$this->number = $number;
		$this->institute = $institute;
	}
}
?>
