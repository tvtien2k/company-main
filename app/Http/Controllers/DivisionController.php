<?php

namespace App\Http\Controllers;

use App\Division;
use App\User;
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

    function getRegister()
    {
        return view('division_register');
    }

    function postRegister(Request $request)
    {
        $division = new Division();
        $division->br_id = $request->br_id;
        $division->dvs_name = $request->name;
        $division->dvs_address = $request->address;
        $division->dvs_area = $request->area;
        $division->dvs_email = $request->email;
        $division->dvs_phone = $request->phone;
        $division->dvs_website = $request->website;
        $division->save();
        return redirect('dashboard/division');
    }

    function getDvsDetail(Request $request)
    {
        $division = Division::find($request->id);
        return view('division_detail', ['division' => $division]);
    }

    function postUpdate(Request $request)
    {
        $division = Division::find($request->id);
        $division->dvs_address = $request->address;
        $division->dvs_area = $request->area;
        $division->dvs_email = $request->email;
        $division->dvs_phone = $request->phone;
        $division->dvs_website = $request->website;
        $division->dvs_status = $request->status;
        $division->save();
        return redirect('dashboard/division');
    }
}
