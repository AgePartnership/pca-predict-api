<?php

namespace TheMarketingLab\PCA\CapturePlus\InteractiveFind;

use Symfony\Component\OptionsResolver\OptionsResolver;

class Client
{
    private $soapClient;
    private $key;

    public function __construct(\SoapClient $client, $key) {
        $this->soapClient = $client;
        $this->key = $key;
    }

    public function find(array $options)
    {
        $resolver = new OptionsResolver();
        $resolver->setDefaults(array(
            'filter' => 'PostalCodes',
            'country' => 'GBR',
            'lang' => 'EN',
            'maxSuggestions' => 7,
            'maxResults' => 100
        ));
        $resolver->setDefined('search');
        $resolver->setRequired('search');

        $options = $resolver->resolve($options);

        $params = array(
            'Key' => $this->key,
            'SearchTerm' => $options['search'],
            'SearchFor' => $options['filter'],
            'Country' => $options['country'],
            'LanguagePreference' => $options['lang'],
            'MaxSuggestions' => $options['maxSuggestions'],
            'MaxResults' => $options['maxResults']
        );
        $response = $this->soapClient->CapturePlus_Interactive_Find_v2_10($params);
        $results = array();
        foreach ($response->CapturePlus_Interactive_Find_v2_10_Result->CapturePlus_Interactive_Find_v2_10_Results as $result) {
            $results[] = new Result(
                $result->Id,
                $result->Text
            );
        }
        return $results;
    }
}
