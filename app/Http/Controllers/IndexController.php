<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function getBlockchainInfo() 
    {
        $response = bitcoind()->getBlockchainInfo();
        return response()->json(['data' => $response]);
    }
}
