<?php
namespace SBBiblio\Model;

/**
 * Contains a representation of an institute of a technical report
 */
class Institute
{
	/** Name of the institute */
	public string $name;
	
	/** Address of the institute */
	public string $address;
	
	/** Homepage of the institute or null if there is no homepage */
	public ?string $homepage;
	
	/**
	 * Creates a new institute object
	 *
	 * @param $name string Name of the institute
	 * @param $address Address of the institute
	 * @param $homepage Homepage of the institute (optional)
	 */
	function __construct(string $name, string $address, ?string $homepage = null)
	{
		$this->name = $name;
		$this->address = $address;
		$this->homepage = $homepage;
	}
}
?>
