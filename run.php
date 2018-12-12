<?php
	
	include "palindrom.class.php";

	$str_arr = [
		'Sum summus mus',
		'Sum summus mus lolow',
		'second'
	];

	echo PHP_EOL.'#####################'.PHP_EOL;
	echo '####### BEGIN #######'.PHP_EOL;
	echo '#####################'.PHP_EOL;

	foreach($str_arr as $str)
	{	
		$palindrom = new Palindrom($str);

		$palindrom->run();

		$palindrom->out();
		
		echo '#####################'.PHP_EOL;
	}
?>