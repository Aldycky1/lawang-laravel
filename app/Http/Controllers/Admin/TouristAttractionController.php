<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TouristAttractionRequest;
use App\TouristAttraction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Yajra\DataTables\Facades\DataTables;

class TouristAttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = TouristAttraction::query();

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
                                    <a class="dropdown-item" href="' . route('tourist-attraction.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('tourist-attraction.destroy', $item->id) . '" method="POST">
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

        return view('pages.admin.tourist-attraction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tourist-attraction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TouristAttractionRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        TouristAttraction::create($data);

        return redirect()->route('tourist-attraction.index');
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
        $item = TouristAttraction::findOrFail($id);

        return view('pages.admin.tourist-attraction.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TouristAttractionRequest $request, $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        $item = TouristAttraction::findOrFail($id);
        $item->update($data);

        return redirect()->route('tourist-attraction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TouristAttraction::findOrFail($id);
        $item->delete();

        return redirect()->route('pages.admin.tourist-attraction.index');
    }
}
