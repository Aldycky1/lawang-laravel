<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristAttractionGallery extends Model
{
    protected $fillable = [
        'photos', 'tourist_attractions_id',
    ];

    protected $hidden = [];

    public function tourist_attraction()
    {
        return $this->belongsTo(TouristAttraction::class, 'tourist_attractions_id', 'id');
    }
}
