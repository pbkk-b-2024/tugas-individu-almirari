<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vinyl;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vinyls = Vinyl::all(); // Fetch all vinyl records
        return view('home', compact('vinyls')); // Pass vinyls to the view
    }
}
