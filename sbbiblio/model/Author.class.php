<?php
/**
 * Contains a representation of an author of a publication
 */
class Author
{
	/** Name of the author */
	public $name;

	/** URL of the homepage */
	public $homepage;
	
	/**
	 * Creates a new author object
	 * 
	 * @param string $name Name of the author
	 * @param string $homepage URL of the homepage (defaults to NULL)
	 */
	function __construct($name, $homepage = NULL)
	{
		$this->name = $name;
		$this->homepage = $homepage;
	}
}
?>
