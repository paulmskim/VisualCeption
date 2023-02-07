<?php

namespace Unit\Codeception\Module;

require_once(__DIR__ . '/TestCestExample.php');

use Codeception\Test\{Cest,Cept};
use PHPUnit\Framework\TestCase;
use Codeception\Module\Utils;

class UtilsTest extends TestCase
{
    /**
     * @throws \JsonException
     */
    public function testGetTestFileName()
    {
        $utils = new Utils();

        $testCept = new Cept('Test test', 'testfilename.php');
        $this->assertEquals('Test.testCept.screenshot.png', $utils->getTestFileName($testCept, 'screenshot'));

        $testCest = new Cest(new TestCestExample(), 'testMethod', 'TestCestExample.php');
        $this->assertEquals('Unit.Codeception.Module.TestCestExample.testMethod.screenshot.png', $utils->getTestFileName($testCest, 'screenshot'));
    }
}
