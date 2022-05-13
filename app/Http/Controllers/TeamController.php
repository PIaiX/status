<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::paginate(4);
        return view('team.index', compact('team'));
    }

    public function show($team)
    {
        $person = Team::where('id', $team)->first();
        return view('team.show', compact('person'));
    }
}
