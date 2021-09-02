<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'date', 'total_price', 'payment_slip', 'status', 'tourist_attractions_id'
    ];

    protected $hidden = [];

    public function users()
    {
        $this->hasMany(User::class, 'checkouts_id', 'id');
    }
}
