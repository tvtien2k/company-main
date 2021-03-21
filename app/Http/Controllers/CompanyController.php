<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function getCompany(Request $request)
    {

        $companies = Company::orderBy('cpn_name')->paginate($request->row ?? 5);
//        dd($companies->links());
        return view('company', ['companies' => $companies]);
    }

    function getSearchCompany(Request $request)
    {
        $companies = Company::query();
        if (!empty($request->id)) {
            $companies = $companies->where('cpn_id', 'LIKE', '%' . $request->id . '%');
        }
        if (!empty($request->name)) {
            $companies = $companies->where('cpn_name', 'LIKE', '%' . $request->name . '%');
        }
        if (!empty($request->email)) {
            $companies = $companies->where('cpn_email', 'LIKE', '%' . $request->email . '%');
        }
        if (!empty($request->phone)) {
            $companies = $companies->where('cpn_phone', 'LIKE', '%' . $request->phone . '%');
        }
        if (!empty($request->status)) {
            $companies = $companies->where('cpn_status', 'LIKE', '%' . $request->status . '%');
        }
        $companies = $companies->orderBy('cpn_name')->get();
        return view('company', ['companies' => $companies]);
    }

    function getRegister()
    {
        return view('company_register');
    }

    function postRegister(Request $request)
    {
        $company = new Company();
        $company->cpn_name = $request->cpn_name;
        $company->cpn_address = $request->address;
        $company->cpn_email = $request->email;
        $company->cpn_phone = $request->phone;
        $company->cpn_website = $request->website;
        $company->save();
        return redirect('dashboard/company');
    }

    function getCpnDetail(Request $request)
    {
        $company = Company::find($request->id);
        return view('company_detail', ['company' => $company]);
    }

    function postUpdate(Request $request)
    {
        $company = Company::find($request->cpn_id);
        $company->cpn_address = $request->address;
        $company->cpn_email = $request->email;
        $company->cpn_phone = $request->phone;
        $company->cpn_website = $request->website;
        $company->cpn_status = $request->status;
        $company->save();
        return redirect('dashboard/company');
    }
}
