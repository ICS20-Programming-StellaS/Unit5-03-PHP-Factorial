<?php
  	// initialize the counter to 0
	$counter = 1;
  $factorial = 1;

	// get the user number
	$userNum = $_POST["userNum"];
	
	// use a do..while loop to print each sentence to the iframe
	do {
		// display the sentence joined with a line break
	  $factorial = $factorial * $counter ;

		// increment the counter
		$counter = $counter + 1;
	} while ($counter <= $userNum);

    echo $factorial
?>
