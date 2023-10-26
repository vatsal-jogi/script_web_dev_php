<?php
//script 42 to find the difference between two  array using array_diff().
 
$Name=array("vatsal","John","Vidhay","Yuvraj");
$name2=array("Smith","Michael","vatsal");
 
echo "<br/>";
$intersection_value=array_diff($Name,$name2); 
print_r($intersection_value);

?>