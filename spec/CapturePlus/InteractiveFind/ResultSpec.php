<?php

namespace spec\TheMarketingLab\PCA\CapturePlus\InteractiveFind;

use TheMarketingLab\PCA\CapturePlus\InteractiveFind\Result;
use TheMarketingLab\PCA\CapturePlus\InteractiveFind\ResultInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ResultSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith("GBR|11328205", "HX7 7BY, The Town Hall, St. Georges Street, Hebden Bridge");
    }
    function it_is_initializable()
    {
        $this->shouldHaveType(Result::class);
        $this->shouldImplement(ResultInterface::class);
    }

    function it_should_have_an_id()
    {
        $this->getId()->shouldBe("GBR|11328205");
    }

    function it_should_have_text()
    {
        $this->getText()->shouldBe("HX7 7BY, The Town Hall, St. Georges Street, Hebden Bridge");
    }

    function it_should_have_text_without_postcode()
    {
        $this->getTextWithoutPostcode()->shouldBe("The Town Hall, St. Georges Street, Hebden Bridge");
    }
}
