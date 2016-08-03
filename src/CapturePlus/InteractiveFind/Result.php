<?php

namespace TheMarketingLab\PCA\CapturePlus\InteractiveFind;

class Result implements ResultInterface
{
    private $id;
    private $text;

    public function __construct($id, $text)
    {
        $this->id = $id;
        $this->text = $text;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getText()
    {
        return $this->text;
    }

    private function splitText()
    {
        return explode(',', $this->getText(), 2);
    }

    public function getTextWithoutPostcode()
    {
        return trim($this->splitText()[1]);
    }

    public function getPostcode()
    {
        return trim($this->splitText()[0]);
    }
}
