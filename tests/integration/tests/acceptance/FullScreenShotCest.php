<?php

use Codeception\Module\WebDriver;
use Codeception\Module\VisualCeption;

class FullScreenShotCest
{
    /**
     * Take a screenshot when the page is smaller than the viewport.
     *
     * @prepare setConfig
     */
    public function pageIsSmallerThanViewport(WebGuy $I, $scenario)
    {
        $I->amOnPage('/multipleAttributes.html');
        $I->dontSeeVisualChanges('pageIsSmallerThanViewport');
    }

    /**
     * Take a screenshot when the page is larger than the viewport.
     *
     * @prepare setConfig
     */
    public function pageIsLargerThanViewport(WebGuy $I, $scenario)
    {
        $I->amOnPage('/greenBlockTall.html');
        $I->dontSeeVisualChanges('pageIsLargerThanViewport');
    }

    /**
     * Take a screenshot when the page is exactly the same height as the viewport.
     *
     * @prepare setConfig
     */
    public function pageIsExactSameHeightAsViewport(WebGuy $I, $scenario)
    {
        $I->amOnPage('/greenBlockViewport.html');
        $I->dontSeeVisualChanges('pageIsExactSameHeightAsViewport');
    }

    /**
     * Take a screenshot when the page is exactly double the viewport height.
     *
     * @prepare setConfig
     */
    public function pageIsExactlyDoubleViewportHeight(WebGuy $I, $scenario)
    {
        $I->amOnPage('/greenBlockDoubleViewport.html');
        $I->dontSeeVisualChanges('pageIsExactlyDoubleViewportHeight');
    }

    protected function setConfig(VisualCeption $visualception)
    {
        $visualception->_reconfigure(['fullScreenShot' => true]);
    }
}
