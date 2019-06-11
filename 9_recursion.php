<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$result = factorial($n);
echo $result;
fclose($handle);

function factorial($n){

	$result = 1;
	if($n >= 2 && $n <=12){
	
		$i = 1;
		while($i <= $n){
			$result = $result * $i;
			$i++;

		}//while

	}//else

	return $result;

}//factorial

?>
