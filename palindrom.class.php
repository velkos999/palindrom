<?php
	
class Palindrom {


	private $str;
	private $length;
	private $palindroms = [];

	function __construct($str)
	{
		$this->str = $this->prepare($str);
		$this->length = $this->getLength($this->str);
	}

	private function prepare($str)
	{	
		return str_replace(' ','',strtolower($str));
	}

	private function getLength($str)
	{
		return strlen($str); 
	}

	private function isPalindrom($str)
	{
		if(!$str || strlen($str) < 2) 
			return false;

		$middle = strlen($str) / 2;
		
		$left = substr($str,0,$middle);

		if((strlen($str) % 2) !== 0)
			$middle += 1;

		$right = strrev(substr($str, $middle)); //reverse
	
		return $left == $right;
	}

	public function run()
	{
		for($i=0;$i<=$this->length;$i++)
		{	
			for($j=0 ; $j <= $this->length - $i ; $j++)
			{	
				if($this->isPalindrom(substr($this->str,$i,$j))) 
					$this->palindroms[] = substr($this->str,$i,$j);
			}
		}
	}

	public function get_the_longest_sub_palindrom()
	{	
		if(count($this->palindroms) == 0)
			return 0;

		return max($this->palindroms);
	}

	public function is_given_str_palindrom()
	{
		return $this->isPalindrom($this->str);
	}

	public function out()
	{	
		echo "given string = ".$this->str.PHP_EOL;

		if($this->is_given_str_palindrom())
			echo "given string is palindrom".PHP_EOL;
		elseif($this->get_the_longest_sub_palindrom())
			echo "the longest palindrom is = ".$this->get_the_longest_sub_palindrom().PHP_EOL;
		else
			echo "first letter of the given string = ".$this->str[0].PHP_EOL;
	}
}

?>