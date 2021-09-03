<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    protected $fillable = [
        'person', 'price', 'tourist_attractions_id', 'tourist_packages_id', 'hotels_id'
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
}
