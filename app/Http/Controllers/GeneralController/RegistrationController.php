<?php

namespace App\Http\Controllers\GeneralController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function index(){
    	return view('generalViews.registration');
    }

    public function insert(Request $request){
        $validation = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'confirmPassword'=>'required|same:password',
            'company'=>'required|unique:users'
        ]);

        if($validation != null){
            return "insert";
        }

    }
}
