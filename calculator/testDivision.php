<?php 
	require 'calculator.php';
	
	class CalculatorDivisonTest extends PHPUnit_Framework_TestCase
	{
		
		private $CalculatorDivison;

		protected function setup()
		{
			$this->CalculatorDivison= new TestPhp();

		}

		protected function tearDown()
		{
			$this->CalculatorDivison=NULL;
		}

		public function addDataProvider(){
			return  array(
				array(10,5,2),
				array(0,1,0),
				array(1,1,1),
			 );
		}

			/**
     * @dataProvider addDataProvider
     */


		public function testDivision($a,$b,$expected)
		{
			$result=$this->CalculatorDivison->divison($a, $b);
			$this->assertEquals($expected,$result);
		}
	}


 ?>