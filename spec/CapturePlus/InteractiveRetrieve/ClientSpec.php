<?php

namespace spec\TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve;

use TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve\Client;
use TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve\Address;
use TheMarketingLab\PCA\CapturePlus\InteractiveFind\Result as FindResult;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }

    function it_retrieves_an_address(FindResult $result)
    {

        $address = $this->retrieve($result);
        $address->shouldHaveType(Address::class);
    }
}
