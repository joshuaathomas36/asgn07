<!DOCTYPE html>
<!--Author:
	Date:
	File:	  cube-test.php
	Purpose:  Test the Cube class exercise
-->

<html>
<head>
	<title>Test Cube Class</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>TEST GAME CHARACTER CLASS</h1>

	<?php
	include("inc-game-character-object.php");
  
	$GameCharacter1 = new GameCharacter();
	$GameCharacter2 = new GameCharacter();	

	$GameCharacter1->setPlayerName("John");
	$GameCharacter1->setScore(120);
	
	$GameCharacter2->setPlayerName("Doe");
	$GameCharacter2->setScore(125);

  if ($GameCharacter1->getScore() > $GameCharacter2->getScore())
  {
  $winningCharacter = $GameCharacter1->getPlayerName();
  }
  else
  {
  $winningCharacter = $GameCharacter2->getPlayerName(); 
  }
  
	print ("<p>The winning character is ".$winningCharacter."!</p>");
  
  include("my-functions.php");
  
        $backToFunctions = backToFunctions();
        print($backToFunctions)
	?>
</body>
</html>
