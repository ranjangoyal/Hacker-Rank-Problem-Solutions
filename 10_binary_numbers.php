<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
getBinaryNumber($n, '');
fclose($handle);

function getContinousOnes($str){
	
	//echo $str;

	$len = strlen($str); 
	$count = 0; 
	$cur_count = 0; 
	

	// Find the maximum repeating character 
	// starting from str[i] 
	$res = $str[0]; 
	for ($i = 0; $i < $len; $i++) { 

		if($str[$i] == "1"){
			$cur_count = 1; 
		}elseif($str[$i] == "0"){
			$cur_count = 0; 
			continue;
		}

		for ($j = $i+1; $j < $len; $j++) { 

			if ($str[$i] != $str[$j]){
				break;
			}
			$cur_count++;
		}

		// Update result if required 
		if ($cur_count > $count){ 
			$count = $cur_count;
			$res = $str[$i];
		}
	}
	//return $res; 
	return $count; 



}//getContinousOnes

function getBinaryNumber($n, $str){

	
	if($n >= 1 && $n <=1000000){
	
		if($n == 1){
			$result = $n.$str;
			 echo getContinousOnes($result);

		}else{
			$remainder = $n%2;
			$str = ($remainder."".$str);
			$quotient = (int)($n/2);
			getBinaryNumber($quotient, $str);

		}//if-else

	}//else

}//getBinaryNumber

?>
