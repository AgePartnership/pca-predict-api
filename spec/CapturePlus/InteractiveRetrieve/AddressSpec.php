<?php

namespace spec\TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve;

use TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve\Address;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AddressSpec extends ObjectBehavior
{
    function let()
    {

        $params = array(
            'id' => 'GB|RM|A|52509479',
            'domesticId' => '52509479',
            'language' => 'ENG',
            'languageAlternatives' => 'ENG',
            'department' => 'Sales',
            'company' => 'Postcode Anywhere (Europe) Ltd',
            'subBuilding' => 'Test',
            'buildingNumber' => "",
            'buildingName' => "Waterside",
            'secondaryStreet' => "Second Lane",
            'street' => 'Basin Road',
            'block' => 'ABC',
            'neighbourhood' => 'Place',
            'district' => 'District place',
            'city' => 'Worcester',
            'line1' => 'Waterside',
            'line2' => 'Basin Road',
            'line3' => 'Third Address Line',
            'line4' => 'Fourth Address Line',
            'line5' => 'Fifth Address Line',
            'adminAreaName' => 'Worchestershire',
            'adminAreaCode' => 'ABC',
            'province' => 'Worchestershire',
            'provinceName' => 'Worchestershire',
            'provinceCode' => 'WOR',
            'postalCode' => 'WR5 3DA',
            'countryName' => 'United Kingdom',
            'countryIso2' => 'GB',
            'countryIso3' => 'GBR',
            'sortingNumber1' => '94142',
            'sortingNumber2' => '45678',
            'barcode' => '(WR53DA1PX)',
            'POBoxNumber' => '34567',
            'label' => "Postcode Anywhere (Europe) Ltd
Waterside
Basin Road
WORCESTER
WR5 3DA
UNITED KINGDOM",
            'type' => 'Commercial',
            'dataLevel' => 'Premise'
        );
        $this->beConstructedWith($params);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType(Address::class);
    }

    function it_has_an_id()
    {

    }
}
