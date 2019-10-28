<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Finished</h1>
<?php
  
	include("inc-adding-calculator.php");
  
    $numOne = $_POST["numOne"];
    $numTwo = $_POST["numTwo"];
    $numThree = $_POST["numThree"];

	$total = new Add();
  
    $total->setNumOne($numOne);
    $total->setNumTwo($numTwo);
    $total->setNumThree($numThree);
  
	print("<p>The total is ".$total->getTotal()."</p>");
  
    include("my-functions.php");
  
        $backToFunctions = backToFunctions();
        print($backToFunctions)
?>
</body>
</html>