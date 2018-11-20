<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\child;
use Illuminate\Support\Facades\Log;

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

    public function update(Request $request)
    {
        $requestChild = $request->input('child');
        $child = child::find($requestChild['id']);
        $child->fill($requestChild)->save();
        return $child;
    }
}
