<?php
//Code to Build Ajax Response to print Bazz for integer following consecutive Fizz/Buzz

$from=$_GET["from"];
$to=$_GET["to"];
for($i=$from;$i<=$to;$i++)
{
if((($i%3)==0)&(($i%5)==0))
	$range[]="FizzBuzz";
if(($i%3)==0)
	$range[]="Fizz";
else if(($i%5)==0)
	$range[]="Buzz";
else
	$range[]=(int)$i." ";
}

for($j=0;$j<($to-$from);$j++)
{
if((($range[$j]=="Fizz")&&($range[$j+1]=="Buzz"))||(($range[$j]=="Buzz")&&($range[$j+1]=="Fizz"))||(($range[$j]=="FizzBuzz")&&($range[$j+1]=="Fizz"))||(($range[$j]=="FizzBuzz")&&($range[$j+1]=="Buzz")))
{
	if(($j+2)<($to-$from))
	$range[$j+2]="Bazz";
}
}
$response=$range;

header("Content-type: application/json");
    echo json_encode($range);


?>
