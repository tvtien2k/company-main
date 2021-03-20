<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    function getHome()
    {
        $branches = Branch::orderBy('br_name')->paginate(10);
        return view('branch', ['branches' => $branches]);
    }

    function getSearch(Request $request)
    {
        $branches = Branch::query();
        $br = '';
        if (!empty($request->cpn_name)) {
            $branches = $branches->join('company', 'branch.cpn_id', '=', 'company.cpn_id')
                ->where('company.cpn_name', 'LIKE', '%' . $request->cpn_name . '%');
            $br = 'branch.';
        }
        if (!empty($request->cpn_id)) {
            $branches = $branches->where($br . 'cpn_id', 'LIKE', '%' . $request->cpn_id . '%');
        }
        if (!empty($request->id)) {
            $branches = $branches->where($br . 'br_id', 'LIKE', '%' . $request->id . '%');
        }
        if (!empty($request->name)) {
            $branches = $branches->where($br . 'br_name', 'LIKE', '%' . $request->name . '%');
        }
        if (!empty($request->email)) {
            $branches = $branches->where($br . 'br_email', 'LIKE', '%' . $request->email . '%');
        }
        if (!empty($request->phone)) {
            $branches = $branches->where($br . 'br_phone', 'LIKE', '%' . $request->phone . '%');
        }
        if (!empty($request->status)) {
            $branches = $branches->where($br . 'br_status', 'LIKE', '%' . $request->status . '%');
        }
        $branches = $branches->orderBy('br_name')->paginate(10);
        return view('branch', ['branches' => $branches]);
    }

    function getRegister()
    {
        return view('branch_register');
    }

    function postRegister(Request $request)
    {
        $branch = new Branch();
        $branch->cpn_id = $request->cpn_id;
        $branch->br_name = $request->name;
        $branch->br_address = $request->address;
        $branch->br_area = $request->area;
        $branch->br_email = $request->email;
        $branch->br_phone = $request->phone;
        $branch->br_website = $request->website;
        $branch->save();
        return redirect('dashboard/branch');
    }

    function getBrDetail(Request $request)
    {
        $branch = Branch::find($request->id);
        return view('branch_detail', ['branch' => $branch]);
    }

    function postUpdate(Request $request)
    {
        $branch = Branch::find($request->id);
        $branch->br_address = $request->address;
        $branch->br_area = $request->area;
        $branch->br_email = $request->email;
        $branch->br_phone = $request->phone;
        $branch->br_website = $request->website;
        $branch->br_status = $request->status;
        $branch->save();
        return redirect('dashboard/branch');
    }
}
