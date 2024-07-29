<?php

class Foo {
    public function __construct() {

        // we fake the soap client to return our prerecorded xml response and have it decoded via the SoapClient
        $client = new class ( __DIR__ . '/StationList.wsdl', ['trace' => true]) extends SoapClient {
            public function __doRequest(string $request, string $location, string $action, int $version, bool $oneWay = false): string
            {
                return \file_get_contents(__DIR__ . '/Result.xml') ?: throw new RuntimeException('missing PointListRequestResult');
            }
        };

        $client->getTheStationListFull();

    }
}

