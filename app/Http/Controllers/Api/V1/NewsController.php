<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index() {
        $API_KEY = '4814ef7797d2473f96671de33e8bec1a';
        $response = Http::retry(3)->timeout(6)->get('https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey='.$API_KEY)->object();
        
        foreach ($response->articles as $article) {
            $article->human_readable_time = Carbon::parse($article->publishedAt)->diffForHumans();
        }

        return json_encode($response);
    }
}
