<?php  
include("node.class.php");
/**
* Binary tree  - Tree Class
*/

class Tree
{
	private $root;

	function __construct($value)
	{ 
		echo "Binary tree example </br>";
		$newNode = new Node($value);
		$this->root = $newNode;
		echo "Creating a binary tree with the root ".$this->root->getValue()." </br>";
	}

	public function add($node, $value)
	{
		if($value < $node->getValue()){
			if($node->getLeftSon() != null){
				$this->add($node->getLeftSon(), $value);
			}else{
				echo " Inserting ".$valor." into the left of ".$node->getValue()." </br>";
				$node->setLeftSon(new Node($value));
			}
		}else if($value > $node->getValue()){
			if($node->getRightSon() != null){
				$this->add($node->getRightSon(), $value);
			}else{
				echo " Inserting ".$valor." into the right of ".$node->getValue()." </br>";
				$node->getRightSon(new Node($value));
			}
		}
	}

	public function remove($node, $value)
	{
		echo " Reading node ".$node->getValue()." </br>";
		if($node == null){
			echo " Tree empty </br>";
		}
	}
}