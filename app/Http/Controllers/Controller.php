<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
//        dd(Point::all());
        return view('welcome', [
            'points' => Point::all()->sortBy('id', 1)
        ]);
    }
}
