<?php  

/**
* Binary tree  - Tree Class
*/

class Tree
{
	private $root;

	function __construct()
	{
		$this->root = null;
	}

	public function add($value)
	{

		$newNode = new Node($value);
		if ($this->root == null) {
			$this->root = $newNode;
		}

		if($value < $this->root->getValue()){
			
		}
	}
}