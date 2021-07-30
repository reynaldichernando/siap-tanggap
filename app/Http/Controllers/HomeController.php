<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $API_KEY = '4814ef7797d2473f96671de33e8bec1a';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=".$API_KEY,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response, true);
        $response['articles'];

        $news = array_slice($response['articles'], 0, 4);

        return view('home', [
            "news"=> $news
        ]);
    }
}
