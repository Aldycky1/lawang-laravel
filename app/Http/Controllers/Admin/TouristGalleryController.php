<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TouristGalleryRequest;
use App\TouristAttraction;
use App\TouristAttractionGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TouristGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = TouristAttractionGallery::with(['tourist_attraction']);

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
                                    <a class="dropdown-item" href="' . route('tourist-gallery.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('tourist-gallery.destroy', $item->id) . '" method="POST">
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
                ->editColumn('photos', function ($item) {
                    return $item->photos ? '<img src="' . Storage::url($item->photos) . '" style="max-height: 80px;" />' : '';
                })
                ->rawColumns(['action', 'photos'])
                ->make();
        }

        return view('pages.admin.tourist-gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourist_attractions = TouristAttraction::all();

        return view('pages.admin.tourist-gallery.create', [
            'tourist_attractions' => $tourist_attractions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TouristGalleryRequest $request)
    {
        $data = $request->all();

        $data['photos'] = $request->file('photos')->store('assets/gallery-wisata', 'public');

        TouristAttractionGallery::create($data);

        return redirect()->route('tourist-gallery.index');
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
        $item = TouristAttractionGallery::findOrFail($id);
        $tourist_attractions = TouristAttraction::all();

        return view('pages.admin.tourist-gallery.edit', [
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
    public function update(TouristGalleryRequest $request, $id)
    {
        $data = $request->all();

        $item = TouristAttractionGallery::findOrFail($id);

        if ($data['photo'] =  $request->file("photo")) {
            $data['photo'] = $request->file('photo')->store('assets/user', 'public');
        } else {
            $data['photo'] = $item->photo;
        }

        $item->update($data);

        return redirect()->route('tourist-gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TouristAttractionGallery::findOrFail($id);

        $item->delete();

        return redirect()->route('tourist-gallery.index');
    }
}
