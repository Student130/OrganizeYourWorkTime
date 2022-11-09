<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function getMake($woj,$name){
        $client = new Client(['base_uri' =>  env('CEPIK_BASE_URL')]);
        $response = $client ->request("GET","/pojazdy",[
            'query' => [
                    'wojewodztwo' => $woj,
                    'data-od' => $name,
                    'limit' => '10'
                ],
            ]);
        $content = $response->getBody()->getContents();
        $class = json_decode($content);
        echo var_dump($class->data[0]);
        //$response = Http::accept('application/json')->get('https://api.cepik.gov.pl/pojazdy?wojewodztwo=02&data-od=20221022&typ-daty=1&tylko-zarejestrowane=true&pokaz-wszystkie-pola=false&limit=100&page=1');
        //echo print_r($response->body());*/
    }
}
