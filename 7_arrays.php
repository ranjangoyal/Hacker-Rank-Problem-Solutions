<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

if($n < 1 || $n > 10000){
}else{
	$revArr = array();
	$arr_temp = fgets($handle);
	$arr = explode(" ",trim($arr_temp));

	if(count($arr) == $n ){
		$revArr = array_reverse($arr);
		echo implode(" ",$revArr);
	}

}

?>
