<?php
namespace SBBiblio\Model;

/**
 * Contains a representation of an author of a publication
 */
class Author
{
	/** Name of the author */
	public string $name;

	/** URL of the homepage  or null if the author has none */
	public ?string $homepage;

	/**
	 * Creates a new author object
	 *
	 * @param $name Name of the author
	 * @param $homepage URL of the homepage or null if the author has none
	 */
	function __construct(string $name, ?string $homepage = null)
	{
		$this->name = $name;
		$this->homepage = $homepage;
	}
}
?>
