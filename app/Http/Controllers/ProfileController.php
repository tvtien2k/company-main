<?php


namespace App\Http\Controllers;


use App\Certificate;
use App\Skill;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Model
{
    function getHome()
    {
        return view('profile');
    }

    function getInformation()
    {

        return view('profile_information');
    }

    function postInformation(Request $request)
    {
        $profile = User::where('id', Auth::id())->first();
        var_dump($profile);
        $profile->dvs_code = $request->dvs_id;
        $profile->phone = $request->phone;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->join_date = $request->join_date;
        $profile->experience = $request->experience;
        $profile->contract = $request->contract;
        $profile->birthday = $request->birthday;
        $profile->email_work = $request->work_email;
        $profile->passport = $request->passport;
        $profile->date_passport = $request->date_passport;
        $profile->save();
        return redirect()->route('profile.get');
    }

    function getSkill(Request $request)
    {
        $skills = Skill::where('user_id', Auth::id())->get();
        return view('profile_skill', ['skills' => $skills]);
    }


    function getSkillUpdate(Request $request)
    {
        $skills = Skill::where('user_id', Auth::id())->get();

        return view('profile_skillupd', ['skills' => $skills]);
    }

    function postSkill(Request $request)
    {
        $skill = new Skill();
        $skill->user_id = Auth::id();
        $skill->sk_type = $request->type;
        $skill->sk_name = $request->name;
        $skill->sk_note = $request->note;
        $skill->sk_experiences = $request->experience;
        $skill->sk_note_experiences = $request->note_experience;
        $skill->sk_level = "Level 3";
        $skill->save();
        return redirect()->route('skill_update.get');
    }

    function postDelete(Request $request)
    {
        $skills = Skill::where('sk_name', $request->name);
        $skills->delete();
        return redirect()->route('skill_update.get');
    }

    //Certificate


    function getCertificate()
    {
        $cers = Certificate::where('user_id', Auth::id())->get();
        return view('profile_certificate', ['cers' => $cers]);
    }

    function getCertificateUpdate(Request $request)
    {
        $cers = Certificate::where('user_id', Auth::id())->get();
        return view('profile_cerupdate', ['cers' => $cers]);
    }

    function postAdd(Request $request)
    {
        $cer = new Certificate();
        $cer->user_id = Auth::id();
        $cer->certificate = $request->certificate;
        $cer->filename = $request->filename;
        $cer->date = $request->date;
        $cer->duration = $request->duration;
        $cer->save();
        return redirect()->route('certificate_update.get');
    }

    function getDelete_Cer(Request $request)
    {
        $cer = Certificate::where('certificate', $request->certificate);
        $cer->delete();
        return redirect()->route('certificate_update.get');
    }


}