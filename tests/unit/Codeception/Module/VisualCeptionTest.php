<?php

namespace Unit\Codeception\Module;

use Codeception\Module\VisualCeption;
use PHPUnit\Framework\TestCase;
use Codeception\Lib\ModuleContainer;
use Codeception\Stub;

class VisualCeptionTest extends TestCase
{

    protected $module = null;

    public function _setUp()
    {
        $container = Stub::make(ModuleContainer::class);
        $this->module = new VisualCeption($container);
    }

    /**
     * @return void
     */
    public function testNoTestsFoundOnThisFileWarning(): void
    {
        $this->assertTrue(true);
    }

}
