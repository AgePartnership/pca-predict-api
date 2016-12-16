<?php

namespace TheMarketingLab\PCA\CapturePlus\InteractiveRetrieve;

use TheMarketingLab\PCA\CapturePlus\InteractiveFind\Result;

class Client
{
    private $soapClient;
    private $key;

    public function __construct(\SoapClient $soapClient, $key)
    {
        $this->soapClient = $soapClient;
        $this->key = $key;
    }

    public function retrieve(Result $findResult)
    {
        $params = array(
            'Key' => $this->key,
            'Id' => $findResult->getId()
        );
        $response = $this->soapClient->CapturePlus_Interactive_Retrieve_v2_10($params);
        $result = $response->CapturePlus_Interactive_Retrieve_v2_10_Result->CapturePlus_Interactive_Retrieve_v2_10_Results;
        if (is_array($result)) {
            $result = $result[0];
        }
        // Hack to convert Object to Array
        $result = json_decode(json_encode($result), true);
        $address = array();
        foreach ($result as $key => $value) {
            $correctedKey = $key;
            if ($key !== "POBoxNumber") {
                $correctedKey = lcfirst($key);
            }
            $address[$correctedKey] = $value;
        }
        return new Address($address);
    }
}
