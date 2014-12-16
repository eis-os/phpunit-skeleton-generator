<?php

class SomeOtherClass extends PHPUnit_Framework_TestCase
{

}

/**
 * Generated by PHPUnit_SkeletonGenerator on %s at %s.
 */
class CalculatorReTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var CalculatorRe
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new CalculatorRe;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert (0, 0) == 0.
     *
     * @covers CalculatorRe::add
     */
    public function testAdd()
    {
        $this->assertEquals(
            0,
            $this->object->add(0, 0)
        );
    }

    /**
     * Generated from @assert (0, 1) == 1.
     *
     * @covers CalculatorRe::add
     */
    public function testAdd2()
    {
        $this->assertEquals(
            1,
            $this->object->add(0, 1)
        );
    }

    /**
     * Generated from @assert (1, 0) == 1.
     *
     * @covers CalculatorRe::add
     */
    public function testAdd3()
    {
        $this->assertEquals(
            1,
            $this->object->add(1, 0)
        );
    }

    /**
     * Generated from @assert (1, 1) == 2.
     *
     * @covers CalculatorRe::add
     */
    public function testAdd4()
    {
        $this->assertEquals(
            2,
            $this->object->add(1, 1)
        );
    }

    /**
     * @covers CalculatorRe::sub
     * @todo   Implement testSub().
     */
    public function testSub()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
