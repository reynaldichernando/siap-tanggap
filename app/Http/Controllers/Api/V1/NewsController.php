<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index() {
        $API_KEY = '4814ef7797d2473f96671de33e8bec1a';
        $response = Http::get('https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey='.$API_KEY);

        return $response->json();
    }
}
