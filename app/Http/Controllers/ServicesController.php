<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function service($alias)
    {
        $teams = Team::all();
        $service = Service::where('alias', $alias)->first();
        return view('services.show', compact('service', 'teams'));
    }
}
