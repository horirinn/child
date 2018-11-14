<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\child;
use Illuminate\Support\Facades\Request;

class ChildController extends Controller
{
    public function index()
    {
        $children = child::all();
        return $children;
    }

    public function insert(Request $request)
    {
        $child = new child;
        $child->fill($request->all())->save();
    }
}
