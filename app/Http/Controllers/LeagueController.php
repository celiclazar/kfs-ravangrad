<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function index()
    {
        return view('pages.league.index');
    }

    public function create()
    {
        return view('pages.league.add');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        dd(json_decode($file));
    }

}
