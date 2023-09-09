<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CurlController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->get('https://github.com/diusazzad/laravel-CURL');
        return $response->getBody();
    }
}
