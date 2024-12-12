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
        // here I check uploaded file
        $request->validate([
            'file' => 'required|file|mimes:json|max:2048',
        ]);

        $file = $request->file('file');
        $json_content = file_get_contents($file);
        $data = json_decode($json_content);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return back()->withErrors(['file' => 'The uploaded file is not a valid JSON.']);
        }

        dd($data);
    }
}
