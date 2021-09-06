<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristPackage extends Model
{
    protected $fillable = [
        'name', 'tourist_attractions_id'
    ];

    protected $hidden = [];

    public function tourist_attraction()
    {
        return $this->belongsTo(TouristAttraction::class, 'tourist_attractions_id', 'id');
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'tourist_packages_id', 'id');
    }
}
