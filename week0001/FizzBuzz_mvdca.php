<?php 
$i=1;
while($i<=100) {

	if(($i-3) / 10 == 3) 
	{
		echo '<br> Fizz <br>';
	}
	elseif(($i-5) / 10 == 5) 
	{
		echo '<br> Buzz <br>';
	}
	else 
	{
		echo $i . ' ';
	}
	
	$i++;
}
