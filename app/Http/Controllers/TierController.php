<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tier;

class TierController extends Controller
{
    public function index()
    {
        $tiers = Tier::with('masterTier')
        ->orderBy('tier', 'asc')
        ->orderBy('starcraft_name','asc')
        ->get();
        return view('tiers', compact('tiers'));
    }
}
