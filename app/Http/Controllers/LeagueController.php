<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeagueController extends Controller
{
    public function index()
    {
        return view('pages.league.index', [
            'leagues' => League::all(),
            'user' => Auth::user(),
        ]);
    }

    public function create()
    {
        return view('pages.league.add', [
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {

    }

}
