<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TouristAttraction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'address', 'slug', 'facilities_id', 'tourist_packages_id', 'hotels_id', 'capacities_id', 'regulations_id'
    ];

    protected $hidden = [];
}
