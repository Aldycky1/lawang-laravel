<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketPrice extends Model
{
    protected $fillable = [
        'name', 'price', 'tourist_attractions_id'
    ];

    protected $hidden = [];

    public function ticket_prices()
    {
        $this->belongsTo(TouristAttraction::class, 'tourist_attractions_id', 'id');
    }
}
