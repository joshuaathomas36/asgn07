<?php
class Cube
{
	private $x;
	private $y;
    private $z;
  
    public function getX()
	{
		return $this->x;
	}
	
	public function setX($x)	
	{
		$this->x = $x;
	}
	
	public function getY()
	{
		return $this->y;
	}
	
	public function setY($y)
	{
		$this->y = $y;
	}
  
    public function getz()
	{
		return $this->z;
	}
	
	public function setz($z)
	{
		$this->z = $z;
	}
	
	public function getArea()
	{	
		return (2 * $this->x * $this->y) + (2 * $this->x * $this->z) + (2 * $this->y * $this->z);
	}
  
    public function getVolume()
	{	
		return $this->x * $this->y * $this->z;
	}
	
} // end of class definition
?>