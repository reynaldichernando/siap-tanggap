<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StatisticController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia')->json(0);
        return $response;
    }
}
