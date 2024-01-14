<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class ApiController extends Controller
{
    //
    public function fetchData()
    {
        $client = new Client();
        $response = $client->get('https://jsonplaceholder.typicode.com/posts');
        $data = json_decode($response->getBody(), true);

        return view('dashboard', ['apiData' => $data]);
    }

}
