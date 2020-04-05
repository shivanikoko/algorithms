<?php

/**
 * 
 */
class FileSizeConverterMethods
{
	
	private $suffixs = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
	private $base = 1024;

	public function method1($number)
	{
		for ($i = 0; $number>$this->base; $i++) {
			$number = $number/$this->base;
		}
		return $number.$this->suffixs[$i];

	}

	public function method2($number)
	{	

		$unit =  floor(log($number, $this->base));
		return $number / pow($this->base, $unit).$this->suffixs[$unit]; 
	}

}

$number = 12718981210;

$converter = new FileSizeConverterMethods();

echo $converter->method1($number).PHP_EOL;
echo $converter->method2($number);


?>
