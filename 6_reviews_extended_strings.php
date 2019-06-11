<?php

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$input = fgets($_fp);
if($input < 1 || $input > 10){

}else{

	$arrIndex = 0;
	$counter = 1;
	$str = "";
	$arr = array();

	while($counter <= $input){

		$arr[$arrIndex] = fgets($_fp);
		$arrIndex++;
		$counter++;
	}//while

	$arrIndex = 0;
	while($arrIndex < count($arr)){
	
		$str1 = "";
		$str2 = "";
		$sl = strlen(trim($arr[$arrIndex]));
		
		if($sl >= 2 && $sl <= 10000){

			$i = 0;
			
			while($i < $sl){
		
				if($i%2 == 0){
					$str2 .= $arr[$arrIndex][$i];
				}else{
					$str1 .= $arr[$arrIndex][$i];
				}
				
				$i++;

			}//while

		}else{
			//echo "String length beyond prescribed limits\n";
		}//if


		echo trim($str2)." ".trim($str1)."\n";

		$arrIndex++;

	}//while

}//if-else

fclose($_fp);
?>