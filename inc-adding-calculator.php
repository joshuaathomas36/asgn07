<?php
class Add
{
	private $numOne;
	private $numTwo;
    private $numThree;

	public function getNumOne()
	{
		return $this->numOne;
	}
	
	public function setNumOne($numOne)
	{
		$this->numOne = $numOne;
	}
	
	public function getNumTwo()
	{
		return $this->numTwo;
	}
	
	public function setNumTwo($numTwo)
	{
		$this->numTwo = $numTwo;
	}
  
    public function getNumThree()
	{
		return $this->numThree;
	}
	
	public function setNumThree($numThree)
	{
		$this->numThree = $numThree;
	}
	
	public function getTotal()
	{	
		return $this->numOne + $this->numTwo + $this->numThree;
	}
	
} // end of class definition
?>