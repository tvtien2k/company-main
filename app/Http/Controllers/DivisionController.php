<?php

namespace App\Http\Controllers;

use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    function getHome()
    {
        $divisions = Division::orderBy('dvs_name')->paginate(10);
        return view('division', ['divisions' => $divisions]);
    }

    function getSearch(Request $request)
    {
        $divisions = Division::query();
        if (!empty($request->id)) {
            $divisions = $divisions->where('dvs_id', 'LIKE', '%' . $request->id . '%');
        }
        if (!empty($request->name)) {
            $divisions = $divisions->where('dvs_name', 'LIKE', '%' . $request->name . '%');
        }
        if (!empty($request->email)) {
            $divisions = $divisions->where('dvs_email', 'LIKE', '%' . $request->email . '%');
        }
        if (!empty($request->phone)) {
            $divisions = $divisions->where('dvs_phone', 'LIKE', '%' . $request->phone . '%');
        }
        if (!empty($request->status)) {
            $divisions = $divisions->where('dvs_status', 'LIKE', '%' . $request->status . '%');
        }
        $divisions = $divisions->orderBy('dvs_name')->paginate(10);
        return view('division', ['divisions' => $divisions]);
    }


}
