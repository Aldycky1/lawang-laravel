<?php

namespace App\Http\Controllers;

use App\TouristAttraction;
use App\TouristPackage;
use Illuminate\Http\Request;

class TouristAttractionController extends Controller
{
    public function show(Request $request, $slug)
    {
        $tourist_attraction =
            TouristAttraction::with(['ticket_prices', 'tourist_galleries', 'tourist_packages', 'working_hours', 'capacities', 'facilities', 'hotels', 'tourist_objects', 'regulations'])
            ->where('slug', $slug)
            ->firstOrFail();

        $tourist_packages = TouristPackage::with([''])

        return view('pages.tourist-attraction', [
            'tourist_attraction' => $tourist_attraction
        ]);
    }
}
