<?php

namespace TheMarketingLab\PCA\CapturePlus;

use Symfony\Component\OptionsResolver\OptionsResolver;

class InteractiveFindClient
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
        $resolver->setDefaults([
            'filter' => 'PostalCodes',
            'country' => 'GBR',
            'lang' => 'EN',
            'maxSuggestions' => 7,
            'maxResults' => 100
        ]);
        $resolver->setDefined('search');
        $resolver->setRequired('search');

        $options = $resolver->resolve($options);

        $params = [
            'Key' => $this->key,
            'SearchTerm' => $options['search'],
            'SearchFor' => $options['filter'],
            'Country' => $options['country'],
            'LanguagePreference' => $options['lang'],
            'MaxSuggestions' => $options['maxSuggestions'],
            'MaxResults' => $options['maxResults']
        ];
        $response = $this->soapClient->CapturePlus_Interactive_Find_v2_10($params);
        $results = [];
        foreach ($response->CapturePlus_Interactive_Find_v2_10_Result->CapturePlus_Interactive_Find_v2_10_Results as $result) {
            $results[] = new InteractiveFindResult(
                $result->Id,
                $result->Text
            );
        }
        return $results;
    }
}
