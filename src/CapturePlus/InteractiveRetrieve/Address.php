<?php

namespace TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve;

class Address
{
    private $id;
    public function __construct($options)
    {
        $this->id = $options["id"];
        $this->domesticId = $options["domesticId"];
        $this->language = $options["language"];
        $this->languageAlternatives = $options["languageAlternatives"];
        $this->department = $options["department"];
        $this->company = $options["company"];
        $this->subBuilding = $options["subBuilding"];
        $this->buildingNumber = $options["buildingNumber"];
        $this->buildingName = $options["buildingName"];
        $this->secondaryStreet = $options["secondaryStreet"];
        $this->street = $options["street"];
        $this->block = $options["block"];
        $this->neighbourhood = $options["neighbourhood"];
        $this->district = $options["district"];
        $this->city = $options["city"];
        $this->line1 = $options["line1"];
        $this->line2 = $options["line2"];
        $this->line3 = $options["line3"];
        $this->line4 = $options["line4"];
        $this->line5 = $options["line5"];
        $this->adminAreaName = $options["adminAreaName"];
        $this->adminAreaCode = $options["adminAreaCode"];
        $this->province = $options["province"];
        $this->provinceCode = $options["provinceCode"];
        $this->postalCode = $options["postalCode"];
        $this->countryName = $options["countryName"];
        $this->countryIso2 = $options["countryIso2"];
        $this->countryIso3 = $options["countryIso3"];
        $this->sortingNumber1 = $options["sortingNumber1"];
        $this->sortingNumber2 = $options["sortingNumber2"];
        $this->barcode = $options["barcode"];
        $this->POBoxNumber = $options["POBoxNumber"];
        $this->label = $options["label"];
        $this->type = $options["type"];
        $this->dataLevel = $options["dataLevel"];
    }

    public function getId()
    {
      return $this->id;
    }

    public function getDomesticId()
    {
        return $this->domesticId;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getLanguageAlternative()
    {
        return $this->languageAlternatives;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getSubBuilding()
    {
        return $this->subBuilding;
    }

    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    public function getBuildingName()
    {
        return $this->buildingName;
    }
    public function getSecondaryStreet()
    {
      return $this->secondaryStreet;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getBlock()
    {
        return $this->block;
    }

    public function getNeighbourhood()
    {
        return $this->neighbourhood;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function getCity()
    {
        return $this->city;
    }
    public function getline1()
    {
        return $this->line1;
    }
    public function getline2()
    {
        return $this->line2;
    }
    public function getline3()
    {
        return $this->line3;
    }
    public function getline4()
    {
        return $this->line4;
    }
    public function getline5()
    {
        return $this->line5;
    }
    public function getAdminAreaName()
    {
        return $this->adminAreaName;
    }
    public function getAdminAreaCode()
    {
        return $this->adminAreaCode;
    }
    public function getProvince()
    {
        return $this->province;
    }
    public function getProvinceCode()
    {
        return $this->provinceCode;
    }
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    public function getCountryName()
    {
        return $this->countryName;
    }
    public function getCountryIso2()
    {
        return $this->countryIso2;
    }
    public function getCountryIso3()
    {
        return $this->countryIso3;
    }
    public function getSortingNumber1()
    {
        return $this->sortingNumber1;
    }
    public function getSortingNumber2()
    {
        return $this->sortingNumber2;
    }
    public function getBarcode()
    {
        return $this->barcode;
    }
    public function getPOBoxNumber()
    {
        return $this->POBoxNumber;
    }
    public function getLabel()
    {
        return $this->label;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDataLevel()
    {
        return $this->dataLevel;
    }
}
