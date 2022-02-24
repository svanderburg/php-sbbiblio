<?php
namespace SBBiblio\Model;

/**
 * Contains properties of a phd thesis publication
 */
class PhDThesis extends Publication
{
	/** School of the MSc student */
	public School $school;

	/**
	 * Creates a new masters thesis object.
	 *
	 * @param $key Unique identifier of the publication
	 * @param $authors List of authors of the publication
	 * @param $title Title of the publication
	 * @param $school School of the MSc student
	 * @param $month Month of the publication date
	 * @param $year Year of the publication date
	 * @param $abstract Abstract of the publication (optional)
	 * @param $pdf Filename of the PDF (optional)
	 * @param $note Additional notes of this publication (optional)
	 */
	function __construct(string $key, array $authors, string $title, School $school, string $month, int $year, string $abstract = NULL, string $pdf = NULL, string $note = NULL)
	{
		parent::__construct($key, $authors, $title, $month, $year, $abstract, $pdf, $note);
		$this->school = $school;
		$this->note = $note;
	}
}
?>
