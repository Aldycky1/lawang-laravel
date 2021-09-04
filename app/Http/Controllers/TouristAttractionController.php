<?php

namespace App\Http\Controllers;

use App\TouristAttraction;
use Illuminate\Http\Request;

class TouristAttractionController extends Controller
{
    public function show(Request $request, $slug)
    {
        $item =
            TouristAttraction::with(['ticket_prices', 'tourist_galleries', 'tourist_packages', 'working_hours', 'capacities', 'facilities', 'hotels', 'tourist_objects', 'regulations'])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('pages.tourist-attraction', [
            'item' => $item
        ]);
    }
}
