<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlanTarifaire;

class MainController extends Controller
{
    public function index()
    {
        $plans = PlanTarifaire::where('is_active', true)->get();
        return view('index', compact('plans'));
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function about()
    {
        return view('about');
    }

    public function use()
    {
        return view('use');
    }
}
