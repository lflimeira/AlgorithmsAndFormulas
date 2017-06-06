<?php  

include("tree.class.php");

/**
* Binary tree  
*/

$tree = new Tree(20);
$tree->add($tree->getRoot(), 22);
$tree->add($tree->getRoot(), 6);
$tree->add($tree->getRoot(), 15);
$tree->add($tree->getRoot(), 8);
$tree->add($tree->getRoot(), 17);
$tree->add($tree->getRoot(), 7);
$tree->add($tree->getRoot(), 3);
$tree->add($tree->getRoot(), 11);
$tree->add($tree->getRoot(), 9);
$tree->add($tree->getRoot(), 16);
$tree->add($tree->getRoot(), 1);
$tree->remove($tree->getRoot(), 15);
$tree->remove($tree->getRoot(), 1);

?>