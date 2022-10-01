<?php
namespace SBBiblio\Model;

/**
 * Contains a representation of an author of a publication
 */
class Author
{
	/** Name of the author */
	public string $name;

	/** URL of the homepage */
	public ?string $homepage;
	
	/**
	 * Creates a new author object
	 *
	 * @param $name Name of the author
	 * @param $homepage URL of the homepage (defaults to NULL)
	 */
	function __construct(string $name, string $homepage = NULL)
	{
		$this->name = $name;
		$this->homepage = $homepage;
	}
}
?>
