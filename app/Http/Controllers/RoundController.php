<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoundController extends Controller
{
    //
    public function create()
    {
        return view('pages.league.rounds.add');
    }

    public function preview(Request $request)
    {

    }
}
