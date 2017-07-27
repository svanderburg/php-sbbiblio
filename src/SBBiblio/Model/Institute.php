<?php
namespace SBBiblio\Model;

/**
 * Contains a representation of an institute of a technical report
 */
class Institute
{
	/** Name of the institute */
	public $name;
	
	/** Address of the institute */
	public $address;
	
	/** Homepage of the institute */
	public $homepage;
	
	/**
	 * Creates a new institute object
	 * 
	 * @param string $name string Name of the institute
	 * @param string $address Address of the institute
	 * @param string $homepage Homepage of the institute
	 */
	function __construct($name, $address, $homepage = NULL)
	{
		$this->name = $name;
		$this->address = $address;
		$this->homepage = $homepage;
	}
}
?>
