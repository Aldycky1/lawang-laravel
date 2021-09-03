<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TouristPackageRequest;
use App\TouristAttraction;
use App\TouristPackage;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TouristPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = TouristPackage::with(['tourist_attraction']);

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
                                    <a class="dropdown-item" href="' . route('tourist-package.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('tourist-package.destroy', $item->id) . '" method="POST">
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

        return view('pages.admin.tourist-package.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourist_attractions = TouristAttraction::all();

        return view('pages.admin.tourist-package.create', [
            'tourist_attractions' => $tourist_attractions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TouristPackageRequest $request)
    {
        $data = $request->all();

        TouristPackage::create($data);

        return redirect()->route('tourist-package.index');
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
        $item = TouristPackage::findOrFail($id);

        return view('pages.admin.tourist-package.edit', [
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
    public function update(TouristPackageRequest $request, $id)
    {
        $data = $request->all();

        $item = TouristPackage::findOrFail($id);

        $item->update($data);

        return redirect()->route('tourist-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TouristPackage::findOrFail($id);

        $item->delete();

        return redirect()->route('tourist-package.index');
    }
}
