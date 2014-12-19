<?php

namespace SebastianBergmann\PHPUnit\SkeletonGenerator;

class TestMethodTest extends \PHPUnit_Framework_TestCase {
    protected function setUp() {
        
    }

    protected function tearDown() {
        
    }

    /**
     * @param        string $code Input code
     * @param        string|null $name Expected function name
     * @dataProvider funcProvider
     */
    public function testGetNameByCode($code, $name) {
        $object = new TestMethod(null, TestMethod::INCOMPLETE, $code);
        
        $this->assertEquals($name, $object->getName());
    }

    public function funcProvider()
    {
        return array(
            array('function xyz_testGetName() {}', 'xyz_testGetName'),
            array('function broken func name () {}', null),
            array('', null)
        );
    }
}
