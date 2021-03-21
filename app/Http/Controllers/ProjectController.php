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
}
