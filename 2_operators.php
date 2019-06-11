<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$x = 0.0;
$y = 0;
$z = 0;

$counter = 1;

while($counter < 4){



	$input = fgets($_fp);

	if($counter == 1){
		$x = $input;

	}elseif($counter == 2){
		$y = $input;

	}else{

		$z = $input;
	}


	$counter++;
}

$totalCiost = round($x+($x*$y/100)+($x*$z/100));

echo "The total meal cost is ".$totalCiost." dollars.";


fclose($_fp);




?>