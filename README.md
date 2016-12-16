# PCA Predict (formerly PostCode Anywhere) PHP API

## Services

It currently implements:
    - CapturePlus Interactive Find (v2.10)
    - CapturePlus Interactive Retrieve (v2.10)

## Installation

The package is available on packagist.org

`composer require themarketinglab/pca-predict-api`

## Usage

### CapturePlus Interactive

```
<?php

use TheMarketingLab\PCA\CapturePlus\InteractiveFind\Client as FindClient;
use TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve\Client as RetrieveClient;

$serviceKey = 'ABC';
$findClient = new FindClient(new \SoapClient('https://services.postcodeanywhere.co.uk/CapturePlus/Interactive/Find/v2.10/wsdlnew.ws'), $apiKey);

// All parameters are optional apart from search
$params = [
    'search' => 'London' // SearchTerm Required
    'filter' => 'PostalCodes' // SearchFor
    'country' => 'GBR' // Country
    'lang' => 'EN', // LanguagePreference
    'maxSuggestions' => 7 // MaxSuggestions,
    'maxResults' => 100 // MaxResults
];
// This returns an array containing TheMarketingLab\PCA\CapturePlus\InteractiveFind\Result objects
$results = $findClient->find($params);

// Get full address

$retrieveClient = new RetrieveClient(new \SoapClient("https://services.postcodeanywhere.co.uk/CapturePlus/Interactive/Retrieve/v2.10/wsdlnew.ws"), $apiKey);

// This returns an TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve\Address object
$address = $retrieveClient->retrieve($results[0]);

```
