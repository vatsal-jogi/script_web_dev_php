<?php
//script 38 to shift and unshift the elements in array using array_shift() & array_unshift().

$Name=array("vatsal","rahul","Vidhay","Yuvraj");
print_r(array_shift($Name));

echo "<br/>";
array_unshift($Name,"shrey");
print_r($Name); 
?>