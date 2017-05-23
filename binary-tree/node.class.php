<?php  

/**
* Binary tree  Node Class
*/

class Node
{
	private $value;
	private $leftSon;
	private $rightSon;

	function __construct($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function setValue($value)
	{
		$this->value = $value;
	}

	public function getLeftSon()
	{
		return $this->leftSon;
	}

	public function setLeftSon($leftSon)
	{
		$this->leftSon = $leftSon;
	}

	public function getRightSon()
	{
		return $this->rightSon;
	}

	public function setRightSon($rightSon)
	{
		$this->rightSon = $rightSon;
	}
}