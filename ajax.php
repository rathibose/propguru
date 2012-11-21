<?php
//Code to Build Ajax Response to print Fizz for multiples of 3 and Buzz for multiples of 5 

$from=$_GET["from"];
$to=$_GET["to"];
for($i=$from;$i<=$to;$i++)
{
if(($i%3)==0)
$range[]="Fizz";
else if(($i%5)==0)
$range[]="Buzz";
else
$range[]=$i." ";

}
$response=$range;

header("Content-type: application/json");
    echo json_encode($range);


?>
