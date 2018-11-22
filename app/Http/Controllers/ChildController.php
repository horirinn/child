<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;
use Illuminate\Support\Facades\Log;

class ChildController extends Controller
{
    public function all()
    {
        $children = Child::all();
        return $children;
    }

    public function one(Request $request)
    {
        $child = Child::find($request->input('id'));
        return $child;
    }

    public function update(Request $request)
    {
        $requestChild = $request->input('child');
        $child = Child::find($requestChild['id']);
        $child->fill($requestChild)->save();
        return $child;
    }
}
