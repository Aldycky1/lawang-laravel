<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TouristAttraction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'address', 'slug', 'is_popular'
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

    public function working_hours()
    {
        return $this->hasMany(WorkingHour::class, 'tourist_attractions_id', 'id');
    }

    public function capacities()
    {
        return $this->hasMany(Capacity::class, 'tourist_attractions_id', 'id');
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class, 'tourist_attractions_id', 'id');
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'tourist_attractions_id', 'id');
    }

    public function regulations()
    {
        return $this->hasMany(Regulation::class, 'tourist_attractions_id', 'id');
    }

    public function tourist_objects()
    {
        return $this->hasMany(TouristObject::class, 'tourist_attractions_id', 'id');
    }
}
