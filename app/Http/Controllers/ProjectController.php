<?php

namespace App\Http\Controllers;

use App\Division;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    function getHome()
    {
        $projects = Project::orderBy('pr_name')->paginate(10);
        return view('project', ['projects' => $projects]);
    }

    function getSearch(Request $request)
    {
        $projects = Project::query();
        if (!empty($request->id)) {
            $projects = $projects->where('pr_id', 'LIKE', '%' . $request->id . '%');
        }
        if (!empty($request->name)) {
            $projects = $projects->where('pr_name', 'LIKE', '%' . $request->name . '%');
        }
        if (!empty($request->date)) {
            $projects = $projects->where('pr_date', $request->date);
        }
        if (!empty($request->status)) {
            $projects = $projects->where('pr_status', $request->status);
        }
        if (!empty($request->quality)) {
            $projects = $projects->where('pr_quality', 'LIKE', '%' . $request->quality . '%');
        }
        $projects = $projects->orderBy('pr_name')->paginate(10);
        return view('project', ['projects' => $projects]);
    }

    function getRegister()
    {
        $division = Division::where('br_id', Auth::user()->division->branch->br_id)->get();
        $users = User::where('dvs_code', Auth::user()->division->dvs_id)->get();
        return view('project_register', ['divisions' => $division, 'users' => $users]);
    }

    function postRegister(Request $request)
    {
        switch ($request->input('action')) {
            case 'teamMember':
                $member = User::find($request->member_id);
                if (!session('members')) {
                    session(['members' => [$member]]);
                } else {
                    $arr = session('members');
                    array_push($arr, $member);
                    session(['members' => $arr]);
                }
                return back()->withInput();

            case 'project':
                // Preview model
                break;
        }
    }
}
