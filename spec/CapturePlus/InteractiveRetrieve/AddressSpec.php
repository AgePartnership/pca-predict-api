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
         new Address($params);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType(Address::class);
    }

    function it_has_an_id()
    {
        $this->getId()->shouldReturn("GB|RM|A|52509479");
    }
    function it_has_a_domesticId()
    {
      $this->getDomesticId()->shouldReturn("52509479");
    }
    function it_has_a_language()
    {
      $this->getLanguage()->shouldReturn("ENG");
    }
    function it_has_a_languageAlternative()
    {
      $this->getLanguageAlternative()->shouldReturn("ENG");
    }
    function it_has_a_department()
    {
      $this->getDepartment()->shouldReturn("Sales");
    }
    function it_has_a_company()
    {
      $this->getCompany()->shouldReturn("Postcode Anywhere (Europe) Ltd");
    }
    function it_has_a_subBuilding()
    {
      $this->getSubBuilding()->shouldReturn("Test");
    }
    function it_has_a_buildingNumber()
    {
        $this->getBuildingNumber()->shouldReturn("");
    }
    function it_has_a_buildingName()
    {
      $this->getBuildingName()->shouldReturn("Waterside");
    }
    function it_has_a_secondaryStreet()
    {
      $this->getSecondaryStreet()->shouldReturn("Second Lane");
    }
    function it_has_a_street()
    {
      $this->getStreet()->shouldReturn("Basin Road");
    }
    function it_has_a_block()
    {
      $this->getBlock()->shouldReturn("ABC");
    }
    function it_has_a_neighbourhood()
    {
      $this->getNeighbourhood()->shouldReturn("Place");
    }
    function it_has_a_district()
    {
      $this->getDistrict()->shouldReturn("District place");
    }
    function it_has_a_city()
    {
      $this->getCity()->shouldReturn("Worcester");
    }
    function it_has_a_line1()
    {
      $this->getline1()->shouldReturn("Waterside");
    }
    function it_has_a_line2()
    {
      $this->getline2()->shouldReturn("Basin Road");
    }
    function it_has_a_line3()
    {
      $this->getline3()->shouldReturn("Third Address Line");
    }
    function it_has_a_line4()
    {
      $this->getline4()->shouldReturn("Fourth Address Line");
    }
    function it_has_a_line5()
    {
      $this->getline5()->shouldReturn("Fifth Address Line");
    }
    function it_has_a_adminAreaName()
    {
      $this->getAdminAreaName()->shouldReturn("Worchestershire");
    }
    function it_has_a_adminAreaCode()
    {
      $this->getAdminAreaCode()->shouldReturn("ABC");
    }
    function it_has_a_province()
    {
      $this->getProvince()->shouldReturn("Worchestershire");
    }
    function it_has_a_provinceCode()
    {
      $this->getProvinceCode()->shouldReturn("WOR");
    }
    function it_has_a_postalCode()
    {
      $this->getPostalCode()->shouldReturn("WR5 3DA");
    }
    function it_has_a_countryName()
    {
      $this->getCountryName()->shouldReturn("United Kingdom");
    }
    function it_has_a_countryIso2()
    {
      $this->getCountryIso2()->shouldReturn("GB");
    }
    function it_has_a_countryIso3()
    {
      $this->getCountryIso3()->shouldReturn("GBR");
    }
    function it_has_a_sortingNumber1()
    {
      $this->getSortingNumber1()->shouldReturn("94142");
    }
    function it_has_a_sortingNumber2()
    {
      $this->getSortingNumber2()->shouldReturn("45678");
    }
    function it_has_a_barcode()
    {
      $this->getBarcode()->shouldReturn("(WR53DA1PX)");
    }
    function it_has_a_POBoxNumber()
    {
      $this->getPOBoxNumber()->shouldReturn("34567");
    }
    function it_has_a_label()
    {
      $this->getLabel()->shouldReturn("Postcode Anywhere (Europe) Ltd
Waterside
Basin Road
WORCESTER
WR5 3DA
UNITED KINGDOM");
    }
    function it_has_a_type()
    {
      $this->getType()->shouldReturn("Commercial");
    }
    function it_has_a_dataLevel()
    {
      $this->getDataLevel()->shouldReturn("Premise");
    }
}
