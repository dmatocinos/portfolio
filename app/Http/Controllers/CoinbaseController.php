<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CoinbaseController extends Controller
{
    public function getUSDConversion()
    {
        $rate = json_decode(file_get_contents('https://api.coinbase.com/v2/exchange-rates?currency=BTC'), true);

        return $rate;
    }
}
