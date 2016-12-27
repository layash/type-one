<?php 
require 'calculator.php';
 
class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new TestPhp();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function addDataProvider() {
        return array(
            array(1,2,2),
            array(0,0,0),
            array(-1,-1,1),
            array(5,6,30),
        );
    }
 
    /**
     * @dataProvider addDataProvider
     */
    public function testmultiply($a, $b, $expected)
    {
        $result = $this->calculator->multiply($a, $b);
        $this->assertEquals($expected, $result);
    }
 
}
?>