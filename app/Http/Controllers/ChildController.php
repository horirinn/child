<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\child;

class ChildController extends Controller
{
    public function all()
    {
        $children = child::all();
        return $children;
    }

    public function one(Request $request)
    {
        $child = child::find($request->input('id'));
        return $child;
    }

    public function insert(Request $request)
    {
        $child = new child;
        $child->fill($request->all())->save();
    }
}
