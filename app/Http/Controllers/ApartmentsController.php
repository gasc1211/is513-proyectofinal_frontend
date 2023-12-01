<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ApartmentsController extends Controller
{
    public function homePage(){
        $client = new Client();
        $response = $client->request('GET', 'localhost:8080/api/apartamentos/obtener/todos');
        $apartments = json_decode($response->getBody(), true);
        return view("home", compact('apartments'));
    }
}
