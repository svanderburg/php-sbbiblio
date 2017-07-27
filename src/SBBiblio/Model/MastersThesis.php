<?php
namespace SBBiblio\Model;

/**
 * Contains properties of a masters thesis publication
 */
class MastersThesis extends Publication
{
	/** School of the MSc student */
	public $school;
	
	/**
	 * Creates a new masters thesis object.
	 * 
	 * @param string $key Unique identifier of the publication 
	 * @param array $authors List of authors of the publication
	 * @param string $title Title of the publication
	 * @param School $school School of the MSc student
	 * @param string $month Month of the publication date
	 * @param string $year Year of the publication date
	 * @param string $abstract Abstract of the publication (optional)
	 * @param string $pdf Filename of the PDF (optional)
	 * @param string $note Additional notes of this publication (optional)
	 */
	function __construct($key, $authors, $title, School $school, $month, $year, $abstract=NULL, $pdf=NULL, $note=NULL)
	{
		parent::__construct($key, $authors, $title, $month, $year, $abstract, $pdf, $note);
		$this->school = $school;
		$this->note = $note;
	}
}
?>
