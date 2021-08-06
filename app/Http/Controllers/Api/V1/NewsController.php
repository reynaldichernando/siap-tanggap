<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $response = Http::retry(3)->timeout(10)->get('https://today.line.me/api/v6/listings/d9b054d8-cf35-4e74-b5f8-a3449b56f078?offset=0&length=10&country=id');
        return $response->json();
    }
}
