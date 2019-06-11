<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

if($n < 1 || $n > 100000){
}else{
	$i = 0;
	$phoneArray = array();
	$queryArray = array();

	 while ( $i < $n) {
		fscanf($handle, "%s  %s", $key, $val);
		$phoneArray[$key] = $val;
		$i++;
	}//while 

	while($name = fscanf($handle, "%s" ) ){
		if($name[0]===chr(10)){
			break;
		}
		$queryArray[] = $name[0];

	}//while
	
	foreach($queryArray as $key=>$val){
		
		if(isset($phoneArray[$val])){
			echo $val."=".$phoneArray[$val];

		}else{
			echo "Not found";

		}//if-else
	
	}//foreach


}//else

fclose($handle);


?>
