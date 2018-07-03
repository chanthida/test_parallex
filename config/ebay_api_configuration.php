<?php
/**
 * Configuration settings used by all of the examples.
 *
 * Specify your eBay application keys in the appropriate places.
 *
 * Be careful not to commit this file into an SCM repository.
 * You risk exposing your eBay application keys to more people than intended.
 */
return [
    'sandbox' => [
        'credentials' => [
            'devId' => '',
            'appId' => '',
            'certId' => '',
        ],
        'authToken' => '',
        'oauthUserToken' => '',
        'ruName' => ''
    ],
    'production' => [
        'credentials' => [
            'devId' => '1ee62fc5-eaf3-44f9-84ab-b27980d84a06',
            'appId' => 'Sawasdee-Sawasdee-PRD-b2ccbdebc-94cdf278',
            'certId' => 'PRD-2ccbdebcf0a9-c2bf-4342-8240-4553',
        ],
        'authToken' => '',
        'oauthUserToken' => '',
        'ruName' => 'Sawasdee.io-Sawasdee-Sawasd-zjwwrdf'
    ]
];