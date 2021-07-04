<?php

namespace App\Http\Controllers\Unit;

use App\Unit;
use App\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller
{
    public function create()
    {
        return view('agent.unit.create');
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $unit = new Unit();
            $unit->unit_name = $request->unit_name;
            $unit->unit_price = $request->unit_price;
            $unit->property_id = $request->property_id;
            $unit->property_title = $request->property_title;
            $unit->save();
            return response()->json([
                'success' => 'Unit Save Successfully!',
            ], 200);
        }
    }

    public function StatusUpdate(Request $request)
    {
        $unit = Unit::find($request->unit_id);
        $unit->status = $request->status;
        $unit->ownership_id = $request->user_id;
        $unit->update();
        return response()->json([
            'success' => 'Unit Status Update Successfully!',
        ], 200);
    }

    public function NewStatusUpdate(Request $request)
    {
        $unit = Unit::find($request->unit_id);
        $unit_name = $unit->unit_name;
        $property_id = $unit->property->id;
        $property_title = $unit->property->propert_title;
        $unit->current = 0;
        $unit->update();
        $unit = new Unit();
        $unit->unit_name = $unit_name;
        $unit->unit_price = $request->unit_price;
        $unit->property_id = $property_id;
        $unit->ownership_id = $request->user_id;
        $unit->status = $request->status;
        $unit->property_title = $property_title;
        $unit->save();
        return response()->json([
            'success' => 'Unit Save Successfully!',
        ], 200);
    }

    public function unitPurchased()
    {
        $units = Unit::where('ownership_id', '=', Auth::user()->id)->where('current', '=', '1')->where('status', '=', '1')->orwhere('status', '=', '2')->paginate(5);
        return view('agent.unit.unit-purchased', compact('units'));
    }
}
