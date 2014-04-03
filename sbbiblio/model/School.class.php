<?php
/**
 * Captures properties of a school
 */
class School
{
	/** Name of the school */
	public $name;
	
	/** URL of the homepage of the school */
	public $homepage;
	
	/**
	 * Creates a new school object.
	 * 
	 * @param string $name Name of the school
	 * @param string $homepage URL of the homepage of the school
	 */
	function __construct($name, $homepage)
	{
		$this->name = $name;
		$this->homepage = $homepage;
	}
}
?>
