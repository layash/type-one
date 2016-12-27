<?php 
// this class tests the legimity of calc.php file 
	include_once ('calculator.php');
	class test extends PHPUnit_Framework_TestCase
		
	{
		private $calculations;
		public function setup(){
			$this->calculations= new TestPhp();
		}
		public function tearDown(){
			$this->calculations=NULL;
		}
		public function testAdd(){
			$see= $this->calculations->add(3,5);
			$this->assertEquals(8,$see);
			
		}
		public function testWithZero(){
			$see=$this->calculations->add(0,0);
			$this->assertEquals(0,$see);
		}
		public function testWithTwoNegative(){
			$see=$this->calculations->add(-1,-1);
			$this->assertEquals(-2,$see);
		}
		public function testWithOneNegativeNumber(){
			$see=$this->calculations->add(-13,6);
			$this->assertEquals(-7,$see);
		}
		
		

	}



 ?>