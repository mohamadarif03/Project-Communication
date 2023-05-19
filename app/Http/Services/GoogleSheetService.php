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

    public function __construct($sheetId)
    {
        $this->client = $this->getClient();
        $this->service = new Sheets($this->client);
        $this->documentId = $sheetId;
        $this->range = 'A1:A1';
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

    public function readSheet($range)
    {
        $doc = $this->service->spreadsheets_values->get($this->documentId, $range);
        return $doc;
    }

    public function writeSheet($values,$range)
    {
        $body = new ValueRange([
            'values' => [
                $values
            ]
        ]);
        $params = [
            'valueInputOption' => 'RAW'
        ];
        $result = $this->service->spreadsheets_values->update($this->documentId, $range, $body, $params);
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

    public function checkSheetExist($sheetName)
    {
        $spreadsheet = $this->service->spreadsheets->get($this->documentId);
        $sheets = $spreadsheet->getSheets();

        foreach ($sheets as $sheet) {
            if ($sheet->getProperties()->getTitle() === $sheetName) {
                return true;
            }
        }

        return false;
    }



}