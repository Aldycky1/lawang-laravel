<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TouristAttraction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'address', 'slug'
    ];

    protected $hidden = [];

    public function ticket_prices()
    {
        return $this->hasMany(TicketPrice::class, 'tourist_attractions_id', 'id');
    }

    public function tourist_galleries()
    {
        return $this->hasMany(TouristAttractionGallery::class, 'tourist_attractions_id', 'id');
    }

    public function tourist_packages()
    {
        return $this->hasMany(TouristPackage::class, 'tourist_attractions_id', 'id');
    }
}
