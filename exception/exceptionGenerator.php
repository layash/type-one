<?php 

	
	class TestInclude_once extends PHPUnit_Framework_TestCase
	{
		/**
     * @expectedException PHPUnit_Framework_Error
     */
		public function testFailingInclude(){
			include 'calculator/index.php';
		}
	}

 ?>