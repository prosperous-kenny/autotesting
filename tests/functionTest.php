<?php



class functiontest extends PHPUnit_Framework_TestCase
{
    public function sumReturnsTheCorrectValue()
    {
        require 'src/sum.php';
        $this->assertEquals(4, add(2,2));
        $this->assertEquals(8, add(2,6));

    }
}
