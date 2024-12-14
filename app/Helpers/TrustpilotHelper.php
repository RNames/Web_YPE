<?php

namespace App\Helpers;

use CodeIgniter\HTTP\CURLRequest;

class TrustpilotHelper
{
    protected $apiKey;
    protected $apiSecret;
    protected $businessUnitId;

    public function __construct()
    {
        $this->apiKey = 'YOUR_API_KEY';
        $this->apiSecret = 'YOUR_API_SECRET';
        $this->businessUnitId = 'YOUR_BUSINESS_UNIT_ID';
    }

    public function getReviews()
    {
        $url = "https://api.trustpilot.com/v1/business-units/{$this->businessUnitId}/reviews";
        
        $headers = [
            'Authorization: Bearer ' . $this->getAccessToken(),
            'Content-Type: application/json',
        ];

        $client = service('curlrequest', ['baseURI' => $url]);
        
        $response = $client->get('', [
            'headers' => $headers,
        ]);

        return json_decode($response->getBody(), true);
    }

    private function getAccessToken()
    {
        $url = "https://api.trustpilot.com/v1/oauth/oauth-business-users-for-applications/accesstoken";
        
        $client = service('curlrequest', ['baseURI' => $url]);

        $response = $client->post('', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->apiKey,
                'client_secret' => $this->apiSecret,
            ],
        ]);

        $result = json_decode($response->getBody(), true);
        return $result['access_token'];
    }
}
