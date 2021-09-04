<?php

namespace App\Http\Controllers;

use App\TouristAttraction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tourist_attractions = TouristAttraction::with('tourist_galleries')->get();

        return view('pages.home', [
            'tourist_attractions' => $tourist_attractions,
        ]);
    }
}
