<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Company;
use App\ProjectMember;
use App\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    function getCompany(Request $request)
    {
        $company = Company::find($request->cpn_id);
        echo $company->cpn_name ?? '';
    }

    function getBranch(Request $request)
    {
        $branch = Branch::where([['br_id', $request->br_id], ['cpn_id', $request->cpn_id]])->first();
        echo $branch->br_name ?? '';
    }

    function getPM(Request $request)
    {
        $pms = User::where('dvs_code', $request->dvs_id)->get();
        echo "<option>Select PM</option>";
        foreach ($pms as $pm) {
            echo "<option value=" . $pm->id . ">" . $pm->name . "</option>";
        }
    }

    function getMember(Request $request)
    {
        $members = User::where([['dvs_code', $request->dvs_id], ['id', '!=', $request->pm_id]])->get();
        foreach ($members as $mb) {
            echo "<option value=" . $mb->id . ">" . $mb->name . "</option>";
        }
    }
}
