<?php

namespace Test\Monit;

use Monit\Monit;
use PHPUnit\Framework\TestCase;

/**
 * Class MonitTest
 *
 * @package Test\Monit
 */
class MonitTest extends TestCase
{
    /**
     * Test getStatusXML() method
     */
    public function testGetStatusXml()
    {
        $expected = 'XML';

        $monit = $this->getMockBuilder(Monit::class)
                      ->disableOriginalConstructor()
                      ->setMethods(['getStatusXml'])
                      ->getMock();

        $monit->expects($this->once())
              ->method('getStatusXml')
              ->willReturn($expected);

        $xml = $monit->getStatusXml();

        self::assertEquals($expected, $xml, 'XML status string is correct.');
        self::assertTrue(strlen($xml) > 0, 'XML status string length greater zero.');
    }
}
