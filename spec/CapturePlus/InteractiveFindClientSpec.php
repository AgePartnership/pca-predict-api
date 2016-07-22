<?php

namespace spec\TheMarketingLab\PCA\CapturePlus;

use TheMarketingLab\PCA\CapturePlus\InteractiveFindClient;
use TheMarketingLab\PCA\CapturePlus\InteractiveFindResultInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InteractiveFindClientSpec extends ObjectBehavior
{
    private $country = 'GBR';
    private $lang = 'EN';
    private $filter = "PostalCodes";
    private $maxSuggestions = 7;
    private $maxResults = 100;
    private $key = "ABCDEF";

    function let(PCASoapClient $soapClient){
        $this->beConstructedWith($soapClient, $this->key);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InteractiveFindClient::class);
    }

    function it_finds_results(PCASoapClient $soapClient)
    {
        $search = "HX7 7BY";
        $params = [
            'Key' => $this->key,
            'SearchTerm' => $search,
            'SearchFor' => $this->filter,
            'Country' => $this->country,
            'LanguagePreference' => $this->lang,
            'MaxSuggestions' => $this->maxSuggestions,
            'MaxResults' => $this->maxResults
        ];
        // SOAP API returns nested objects
        $response = unserialize('O:8:"stdClass":1:{s:41:"CapturePlus_Interactive_Find_v2_10_Result";O:8:"stdClass":1:{s:42:"CapturePlus_Interactive_Find_v2_10_Results";a:2:{i:0;O:8:"stdClass":6:{s:2:"Id";s:12:"GBR|53117813";s:4:"Text";s:57:"HX7 7BY, The Spacebar, St. Georges Street, Hebden Bridge ";s:9:"Highlight";s:0:"";s:6:"Cursor";i:0;s:11:"Description";s:0:"";s:4:"Next";s:8:"Retrieve";}i:1;O:8:"stdClass":6:{s:2:"Id";s:12:"GBR|11328205";s:4:"Text";s:58:"HX7 7BY, The Town Hall, St. Georges Street, Hebden Bridge ";s:9:"Highlight";s:0:"";s:6:"Cursor";i:0;s:11:"Description";s:0:"";s:4:"Next";s:8:"Retrieve";}}}}');
        $soapClient->CapturePlus_Interactive_Find_v2_10($params)->willReturn($response);
        $options = [
            'search' => $search
        ];
        $results = $this->find($options);
        $results->shouldHaveCount(2);
        $results[0]->shouldImplement(InteractiveFindResultInterface::class);
        $results[0]->getId()->shouldReturn("GBR|53117813");
        $results[0]->getText()->shouldReturn("HX7 7BY, The Spacebar, St. Georges Street, Hebden Bridge ");
        $results[1]->shouldImplement(InteractiveFindResultInterface::class);
        $results[1]->getId()->shouldReturn("GBR|11328205");
        $results[1]->getText()->shouldReturn("HX7 7BY, The Town Hall, St. Georges Street, Hebden Bridge ");
    }

}

class PCASoapClient extends \SoapClient {
    // This is required as PHPSpec can't mock magic methods
    // See: https://github.com/phpspec/prophecy/issues/80
    public function CapturePlus_Interactive_Find_v2_10(array $params)
    {

    }
};
