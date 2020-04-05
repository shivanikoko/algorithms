<?php
$suffixs = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
$base = 1024;
$number = 12718981210;

function getSize($number)
{
	global $base;
	global $suffixs;
	for ($i = 0; $number>$base; $i++) {
		$number = divideByBase($number);
	}
	return $number.$suffixs[$i];

}

function divideByBase($number)
{				
	global $base;
	return $number/$base;
}

echo getSize($number);

?>
