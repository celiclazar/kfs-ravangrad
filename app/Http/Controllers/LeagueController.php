<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeagueController extends Controller
{
    public function index()
    {
        $leagues = League::all();
        return view('pages.league.index', [
            'leagues' => $leagues,
            'user' => Auth::user(),
        ]);
    }

    public function show(int|string $id)
    {
        $league = League::with('weeks')->findOrFail($id);
        $weeks = $league->weeks();
        $user = Auth::user();

        return view('pages.league.show', [
            'league' => $league,
            'weeks' => $weeks,
            'user' => $user,
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
        $request->validate([
            'name' => 'required|string|max:255|unique:leagues,name',
        ]);
        $league = new League();
        $league->name = $request->input('name');
        $league->save();

        return redirect()->route('league');
    }

    public function edit(int $id)
    {
        return view('pages.league.edit', [
            'league' => League::find($id),
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $league = League::find($id);
        $league->name = $request->input('name');
        $league->is_locked = $request->input('is_locked');
        $league->save();

        return redirect()->route('league');
    }

    public function delete(int $id)
    {
        $league = League::findOrFail($id);
        return view('pages.league.delete', compact('league'));
    }

    public function destroy(int $id)
    {
        $league = League::findOrFail($id);

        if ($league->is_locked) {
            return redirect()->route('league.delete', $league->id)
                ->withErrors(['delete_error' => 'This league cannot be deleted because it is locked.']);
        }

        $league->delete();

        return redirect()->route('league')->with('success', 'League deleted successfully.');
    }

}
