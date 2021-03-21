<?php

namespace App\Http\Controllers;

use App\Division;
use App\Project;
use App\ProjectMember;
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
        $members = ProjectMember::where('pr_id', null)->get();
        return view('project_register', ['divisions' => $division, 'members' => $members]);
    }

    function postRegister(Request $request)
    {
        switch ($request->input('action')) {
            case 'teamMember':
                if (count(ProjectMember::where([['pr_id', null], ['user_id', $request->member_id]])->get()) == 0) {
                    $member = new ProjectMember();
                    $member->user_id = $request->member_id;
                    $member->role = $request->role;
                    $member->save();
                }
                return back()->withInput();
            case 'project':
                $project = new Project();
                $project->pr_name = $request->name;
                $project->dvs_id = $request->division;
                $project->pr_pm = $request->pm_id;
                $project->pr_date = $request->start_date;
                $project->pr_tool = $request->tool;
                $project->pr_documentation = $request->documentation;
                $project->pr_description = $request->description;
                $project->save();
                $members = ProjectMember::where('pr_id', null)->update(['pr_id'=>$project->pr_id]);
                return redirect('dashboard/project');
        }
    }

    function getDeleteMember1(Request $request)
    {
        $member = ProjectMember::where([['pr_id', null], ['user_id', $request->id]])->first();
        $member->delete();
        return back()->withInput();
    }
}
