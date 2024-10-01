<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tier;

class LadderController extends Controller
{
    public function index()
    {
        $tiers = Tier::with('matchScoreRecord')
        ->orderBy('ladder_score', 'desc')
        ->orderBy('starcraft_name','asc')
        ->get();
        return view('ladder.tiers', compact('tiers'));
    }
}
