<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RegulationRequest;
use App\Regulation;
use App\TouristAttraction;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RegulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Regulation::with(['tourist_attraction']);

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
                                    <a class="dropdown-item" href="' . route('regulation.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('regulation.destroy', $item->id) . '" method="POST">
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

        return view('pages.admin.regulation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourist_attractions = TouristAttraction::all();

        return view('pages.admin.regulation.create', [
            'tourist_attractions' => $tourist_attractions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegulationRequest $request)
    {
        $data = $request->all();

        Regulation::create($data);

        return redirect()->route('regulation.index');
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
        $item = Regulation::findOrFail($id);

        return view('pages.admin.regulation.edit', [
            'item' => $item,
            'tourist_attractions' => $tourist_attractions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegulationRequest $request, $id)
    {
        $data = $request->all();

        $item = Regulation::findOrFail($id);

        $item->update($data);

        return redirect()->route('regulation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Regulation::findOrFail($id);

        $item->delete();

        return redirect()->route('regulation.index');
    }
}
