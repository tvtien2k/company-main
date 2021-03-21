<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

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
}
