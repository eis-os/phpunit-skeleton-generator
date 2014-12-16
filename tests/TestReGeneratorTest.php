<?php
namespace SebastianBergmann\PHPUnit\SkeletonGenerator;

use PHPUnit_Framework_TestCase;
use org\bovigo\vfs\vfsStream;

class TestReGeneratorTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        vfsStream::setup();
    }

    /**
     * @param        string $className
     * @dataProvider provider
     */
    public function testReGeneratesTestCodeCorrectly($className, $partialName)
    {
        $inoutFilename = $className . 'Test-'.$partialName.'.php';
        $generatedFile = vfsStream::url('root') . '/' . $inoutFilename;
        $oldGeneratedFile = __DIR__ . '/_fixture/_inputtests/' . $inoutFilename;
        
        copy($oldGeneratedFile, $generatedFile);
        
        $generator = new TestReGenerator(
            $className,
            __DIR__ . '/_fixture/_input/' . $className . '.php',
            $className . 'Test',
            $generatedFile
        );

        $generator->write();
        
        //copy($generatedFile, __DIR__ . '/_fixture/_expected/' . $inoutFilename . '.bak');
        $this->assertStringMatchesFormatFile(
            __DIR__ . '/_fixture/_expected/' . $inoutFilename,
            file_get_contents($generatedFile)
        );
     
    }

    
    public function provider()
    {
        return array(
            array('CalculatorRe', 'simple'),
            array('CalculatorRe', 'classmissing')
        );
    }
}
