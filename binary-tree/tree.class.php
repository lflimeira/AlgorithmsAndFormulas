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

	public function getRoot()
	{
		return $this->root;
	}

	public function add($node, $value)
	{
		if($value < $node->getValue()){
			if($node->getLeftSon() != null){
				$this->add($node->getLeftSon(), $value);
			}else{
				echo " Inserting ".$value." into the left of ".$node->getValue()." </br>";
				$node->setLeftSon(new Node($value));
			}
		}else if($value > $node->getValue()){
			if($node->getRightSon() != null){
				$this->add($node->getRightSon(), $value);
			}else{
				echo " Inserting ".$value." into the right of ".$node->getValue()." </br>";
				$node->setRightSon(new Node($value));
			}
		}
	}

	public function remove($node, $value)
	{
		echo " Reading node ".$node->getValue()." </br>";
		if($node == null){
			echo " Tree empty </br>";
		}
			
		if ($value < $node->getValue()) {
			$node->setLeftSon($this->remove($node->getLeftSon(), $value));
		}
		else if ($value > $node->getValue()) {
			$node->setRightSon($this->remove($node->getRightSon(), $value));
		} else if ($node->getLeftSon() != null && $node->getRightSon() != null) {
			echo " Removed node ".$node->getValue()." </br>";
			$node->setValue( $this->findMinimum($node->getRightSon())->getValue());
			$node->setRightSon($this->removeMinimum($node->getRightSon()));
		} else {
			echo " Removed node ".$node->getValue()." </br>";
			$node = ($node->getLeftSon() == null) ? $node->getLeftSon() : $node->getRightSon();
		}

		return $node;
	}

	public function removeMinimum($node)
	{
		if ($node == null) {
			echo " ERROR ";
		} else if ($node->getLeftSon() != null) {
			$node->setLeftSon($this->removeMinimum($node->getLeftSon()));
			return $node;
		} else {
			return $node->getRightSon();
		}
		return null;
	}

	public function findMinimum($node)
	{
		if ($node != null) {
			while($node->getLeftSon() != null){
				$node = $node->getLeftSon();
			}
		}
		return $node;
	}
}