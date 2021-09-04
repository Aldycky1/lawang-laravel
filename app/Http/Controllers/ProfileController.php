<?php

namespace App\Http\Controllers;

use App\TouristAttraction;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view(
            'pages.profile'
        );
    }
}
