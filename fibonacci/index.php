<?php  

/**
* Fibonacci Sequence  
*/
function calcFibonacci($number, $show = false)
{
	
	if($number <= 1)
	{
		return 1;
	}
	return (calcFibonacci($number-1, $show) + calcFibonacci($number-2, $show));
}

$val = $_GET["val"];
if(is_numeric($val) && $val != "")
{
	echo calcFibonacci($val,true);
}else{
	echo "Enter a valid value!!";
}
?>