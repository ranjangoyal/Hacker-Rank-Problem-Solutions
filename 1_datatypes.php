DATA TYPES
<?php
$counter = 1;

while($counter < 4){

    
	$x = 0;
	$y = 0.0;
	$z = "";

	$input = fgets($handle);

	if($counter == 1){
		echo $i+$input."\n";

	}elseif($counter == 2){
		echo number_format (($d+$input), 1)."\n";

	}else{

		echo $s;
		echo $input."\n";
	}


	$counter++;
}
?>