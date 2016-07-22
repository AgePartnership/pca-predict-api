<?php

namespace spec\TheMarketingLab\PCA\CapturePlus;

use TheMarketingLab\PCA\CapturePlus\InteractiveFindResult;
use TheMarketingLab\PCA\CapturePlus\InteractiveFindResultInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InteractiveFindResultSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith("GBR|11328205", "HX7 7BY, The Town Hall, St. Georges Street, Hebden Bridge");
    }
    function it_is_initializable()
    {
        $this->shouldHaveType(InteractiveFindResult::class);
        $this->shouldImplement(InteractiveFindResultInterface::class);
    }

    function it_should_have_an_id()
    {
        $this->getId()->shouldBe("GBR|11328205");
    }

    function it_should_have_text()
    {
        $this->getText()->shouldBe("HX7 7BY, The Town Hall, St. Georges Street, Hebden Bridge");
    }
}
