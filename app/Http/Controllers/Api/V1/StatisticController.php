<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StatisticController extends Controller
{
    public function index()
    {
        $response = Http::retry(3)->timeout(3)->get('https://dekontaminasi.com/api/id/covid19/stats')->json();
        return $response;
    }
}
