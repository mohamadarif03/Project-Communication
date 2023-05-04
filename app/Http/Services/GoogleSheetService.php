<?php

namespace App\Http\Services;

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\Sheet;
use Google\Service\Sheets\ValueRange;
use Google\Service\Sheets\Spreadsheet;
use Google\Service\Drive;
use Google\Service\Drive\Permission;
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

    public function createSheet($title)
    {
        $spreadsheet = new Spreadsheet([
            'properties' => [
                'title' => $title
            ],

        ]);
        $spreadsheet = $this->service->spreadsheets->create($spreadsheet);
        
        $spreadsheetId = $spreadsheet->getSpreadsheetId();
        $url = "https://docs.google.com/spreadsheets/d/" . $spreadsheetId;
    
        return $spreadsheetId;
    }



}