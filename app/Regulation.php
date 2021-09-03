<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    protected $fillable = [
        'description', 'tourist_attractions_id'
    ];

    protected $hidden = [];

    public function tourist_attraction()
    {
        return $this->belongsTo(TouristAttraction::class, 'tourist_attractions_id', 'id');
    }
}
