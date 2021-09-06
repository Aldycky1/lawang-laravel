<?php

namespace App\Http\Controllers\Admin;

use App\Capacity;
use App\Hotel;
use App\HotelPrice;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HotelPriceRequest;
use App\TouristAttraction;
use App\TouristPackage;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HotelPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = HotelPrice::with(['tourist_attraction', 'tourist_package', 'hotel', 'capacity']);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                        type="button"
                                        data-toggle="dropdown">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('hotel-price.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('hotel-price.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.hotel-price.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourist_attractions = TouristAttraction::all();
        $tourist_packages = TouristPackage::all();
        $hotels = Hotel::all();
        $capacities = Capacity::all();

        return view('pages.admin.hotel-price.create', [
            'tourist_attractions' => $tourist_attractions,
            'tourist_packages' => $tourist_packages,
            'hotels' => $hotels,
            'capacities' => $capacities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelPriceRequest $request)
    {
        $data = $request->all();

        HotelPrice::create($data);

        return redirect()->route('hotel-price.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tourist_attractions = TouristAttraction::all();
        $tourist_packages = TouristPackage::all();
        $hotels = Hotel::all();
        $capacities = Capacity::all();

        $item = HotelPrice::findOrFail($id);

        return view('pages.admin.hotel-price.edit', [
            'item' => $item,
            'tourist_attractions' => $tourist_attractions,
            'tourist_packages' => $tourist_packages,
            'hotels' => $hotels,
            'capacities' => $capacities,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HotelPriceRequest $request, $id)
    {
        $data = $request->all();

        $item = HotelPrice::findOrFail($id);

        $item->update($data);

        return redirect()->route('hotel-price.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = HotelPrice::findOrFail($id);

        $item->delete();

        return redirect()->route('hotel-price.index');
    }
}
