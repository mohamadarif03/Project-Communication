<?php

namespace App\Http\Services;

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\Sheet;
use Google\Service\Sheets\ValueRange;

class GoogleSheetService
{
    public $client, $service, $documentId, $range;

    public function __construct($range)
    {
        $this->client = $this->getClient();
        $this->service = new Sheets($this->client);
        $this->documentId = 'ID DARI SHEET';
        $this->range = $range;
    }

    public function getClient()
    {
        $client = new Client();
        $client->setApplicationName('Laravel');
        $client->setRedirectUri('http://localhost:8000');
        $client->setScopes(Sheets::SPREADSHEETS);
        $client->setAuthConfig('credential.json');
        $client->setAccessType('offline');

        return $client;
    }

    public function readSheet()
    {
        $doc = $this->service->spreadsheets_values->get($this->documentId, $this->range);
        return $doc;
    }

    public function writeSheet($values)
    {
        $body = new ValueRange([
            'values' => [
                $values
            ]
        ]);
        $params = [
            'valueInputOption' => 'RAW'
        ];
        $result = $this->service->spreadsheets_values->update($this->documentId, $this->range, $body, $params);
    }

    public function appendSheet($values)
    {
        $body = new ValueRange([
            'values' => [
                $values
            ]
        ]);
        $params = [
            'valueInputOption' => 'USER_ENTERED'
        ];
        $result = $this->service->spreadsheets_values->append($this->documentId, $this->range, $body, $params);
    }
}