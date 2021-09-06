<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    protected $fillable = [
        'person', 'tourist_attractions_id',
    ];

    protected $hidden = [];

    public function tourist_attraction()
    {
        return $this->belongsTo(TouristAttraction::class, 'tourist_attractions_id', 'id');
    }
}
