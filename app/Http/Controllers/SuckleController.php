<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suckle;

class SuckleController extends Controller
{
    public function all(Request $request)
    {
        $childrenId = $request->input('childId');
        $suckles = Suckle::where('childId', $childrenId)->get();
        return $suckles;
    }

    public function create(Request $request)
    {
        $requestSuckle = $request->input('suckle');
        $suckle = new Suckle;
        $suckle->fill($requestSuckle)->save();
        return $suckle;
    }
}
