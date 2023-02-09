<?php

namespace Codeception\Exception;

use PHPUnit\Framework\Exception;

class ImageDeviationException extends Exception
{

    private $identifier;
    private $expectedImage;
    private $currentImage;
    private $deviationImage;

    public function __construct($message, $identifier, $expectedImage, $currentImage, $deviationImage)
    {
        $this->identifier     = $identifier;
        $this->deviationImage = $deviationImage;
        $this->currentImage   = $currentImage;
        $this->expectedImage  = $expectedImage;

        parent::__construct($message);
    }

    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function getDeviationImage()
    {
        return $this->deviationImage;
    }

    public function getCurrentImage()
    {
        return $this->currentImage;
    }

    public function getExpectedImage()
    {
        return $this->expectedImage;
    }

    /**
     * Wrapper for getMessage() which is declared as final.
     */
    public function __toString(): string
    {
        return $this->message;
    }
}
