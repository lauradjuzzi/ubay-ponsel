<?php

namespace App\Http\Controllers;

use App\Models\EMoney;
use App\Models\Kuota;
use App\Models\Pulsa;
use App\Models\token;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $eMoney = EMoney::all();
        $token = token::all();
        $kuotas = Kuota::all();
        $pulsas = Pulsa::all();

        return view('welcome', compact('eMoney', 'token', 'kuotas', 'pulsas'));
    }
}
