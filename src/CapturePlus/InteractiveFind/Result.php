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
}