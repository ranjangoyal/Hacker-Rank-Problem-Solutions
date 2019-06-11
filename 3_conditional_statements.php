<?php

$_fp = fopen("php://stdin", "r");

fscanf($_fp,"%d",$result);

if($result%2 == 0){

	if($result >= 2 && $result <= 5){
		echo "Not Weird";

	}elseif($result >= 6 && $result <= 20){
		echo "Weird";

	}elseif($result > 20){
		echo "Not Weird";

	}

}else{

	echo "Weird";
}

fclose($_fp);
