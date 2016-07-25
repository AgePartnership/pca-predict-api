<?php

namespace spec\TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve;

use TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve\Client;
use TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve\Address;
use TheMarketingLab\PCA\CapturePlus\InteractiveFind\Result as FindResult;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    private $key = 'ABC';

    function let(PCAClient $soapClient)
    {
        $this->beConstructedWith($soapClient, $this->key);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }

    function it_retrieves_an_address(FindResult $result, PCAClient $soapClient)
    {
        $params = [
            'Key' => $this->key,
            'Id' => 'GBR|11328205'
        ];
        $response = unserialize('O:8:"stdClass":1:{s:45:"CapturePlus_Interactive_Retrieve_v2_10_Result";O:8:"stdClass":1:{s:46:"CapturePlus_Interactive_Retrieve_v2_10_Results";O:8:"stdClass":37:{s:2:"Id";s:16:"GB|RM|A|11328205";s:10:"DomesticId";s:8:"11328205";s:8:"Language";s:3:"ENG";s:20:"LanguageAlternatives";s:3:"ENG";s:10:"Department";s:0:"";s:7:"Company";s:13:"The Town Hall";s:11:"SubBuilding";s:0:"";s:14:"BuildingNumber";s:0:"";s:12:"BuildingName";s:0:"";s:15:"SecondaryStreet";s:0:"";s:6:"Street";s:18:"St. Georges Street";s:5:"Block";s:0:"";s:13:"Neighbourhood";s:0:"";s:8:"District";s:0:"";s:4:"City";s:13:"Hebden Bridge";s:5:"Line1";s:18:"St. Georges Street";s:5:"Line2";s:0:"";s:5:"Line3";s:0:"";s:5:"Line4";s:0:"";s:5:"Line5";s:0:"";s:13:"AdminAreaName";s:10:"Calderdale";s:13:"AdminAreaCode";s:0:"";s:8:"Province";s:14:"West Yorkshire";s:12:"ProvinceName";s:14:"West Yorkshire";s:12:"ProvinceCode";s:0:"";s:10:"PostalCode";s:7:"HX7 7BY";s:11:"CountryName";s:14:"United Kingdom";s:11:"CountryIso2";s:2:"GB";s:11:"CountryIso3";s:3:"GBR";s:16:"CountryIsoNumber";i:826;s:14:"SortingNumber1";s:5:"37223";s:14:"SortingNumber2";s:0:"";s:7:"Barcode";s:11:"(HX77BY1AV)";s:11:"POBoxNumber";s:0:"";s:5:"Label";s:69:"The Town Hall
St. Georges Street
HEBDEN BRIDGE
HX7 7BY
UNITED KINGDOM";s:4:"Type";s:10:"Commercial";s:9:"DataLevel";s:7:"Premise";}}}');
        $soapClient->CapturePlus_Interactive_Retrieve_v2_10($params)->willReturn($response);
        $result->getId()->willReturn('GBR|11328205');
        $address = $this->retrieve($result);
        $address->shouldHaveType(Address::class);
        $address->getCompany()->shouldReturn('The Town Hall');
        $address->getPostalCode()->shouldReturn('HX7 7BY');
        $address->getLine1()->shouldReturn('St. Georges Street');
        $address->getCity()->shouldReturn('Hebden Bridge');
    }
}

class PCAClient extends \SoapClient {
    // This is required as PHPSpec can't mock magic methods
    // See: https://github.com/phpspec/prophecy/issues/80
    public function CapturePlus_Interactive_Retrieve_v2_10($parameters){

    }
}
