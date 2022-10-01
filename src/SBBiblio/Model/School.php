<?php
namespace SBBiblio\Model;

/**
 * Captures properties of a school
 */
class School
{
	/** Name of the school */
	public string $name;
	
	/** URL of the homepage of the school */
	public ?string $homepage;
	
	/**
	 * Creates a new school object.
	 *
	 * @param $name Name of the school
	 * @param $homepage URL of the homepage of the school (optional)
	 */
	function __construct(string $name, string $homepage = null)
	{
		$this->name = $name;
		$this->homepage = $homepage;
	}
}
?>
