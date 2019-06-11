<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

$index = 1;

while($index <= 10){
    
    echo $n." x ".$index." = ".$n*$index."\n";
       
    $index++;
    
}//while

?>
