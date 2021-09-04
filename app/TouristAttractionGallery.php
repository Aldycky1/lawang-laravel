<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristAttractionGallery extends Model
{
    protected $fillable = [
        'photos', 'tourist_attractions_id', 'is_home', 'is_tempat_wisata',
    ];

    protected $hidden = [];

    public function tourist_attraction()
    {
        return $this->belongsTo(TouristAttraction::class, 'tourist_attractions_id', 'id');
    }
}
