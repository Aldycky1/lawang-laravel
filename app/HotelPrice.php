<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelPrice extends Model
{
    protected $fillable = [
        'price', 'tourist_attractions_id', 'tourist_packages_id', 'hotels_id', 'capacities_id',
    ];

    protected $hidden = [];

    public function tourist_attraction()
    {
        return $this->belongsTo(TouristAttraction::class, 'tourist_attractions_id', 'id');
    }

    public function tourist_package()
    {
        return $this->belongsTo(TouristPackage::class, 'tourist_packages_id', 'id');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotels_id', 'id');
    }

    public function capacity()
    {
        return $this->belongsTo(Capacity::class, 'capacities_id', 'id');
    }
}
