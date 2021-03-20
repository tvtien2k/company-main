<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    function getCompany(Request $request)
    {
        $company = Company::find($request->cpn_id);
        echo $company->cpn_name ?? '';
    }
}
