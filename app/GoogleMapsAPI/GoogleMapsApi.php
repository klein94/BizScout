<?php

namespace App\GoogleMapsAPI;

use \GuzzleHttp\Client;

class GoogleMapsAPI
{
    private $url = "https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=Starbucks&inputtype=textquery&fields=photos,formatted_address,name,rating,opening_hours,geometry&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo";

    public function search($request)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $this->url);

        // echo $response->getStatusCode(); // 200
        // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
        // echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

        // Send an asynchronous request.
        // $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
        // $promise = $client->sendAsync($request)->then(function ($response) {
        //     echo 'I completed! ' . $response->getBody();
        // });

        // $promise->wait();

        return json_decode($response->getBody());
    }
}
