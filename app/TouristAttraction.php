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
        $this->hasMany(TicketPrice::class, 'tourist_attractions_id', 'id');
    }
}
