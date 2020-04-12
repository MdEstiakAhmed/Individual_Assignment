<?php

namespace App\Http\Controllers\GeneralController;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomeRequest;
use Validator;

class LoginController extends Controller
{
    public function index(){
        return view('generalViews.login');
    }

    public function formValidation(Request $request){
        $validation = $request->validate([
            'email'=>'required|email|exists:users',
            'password'=>'required'
        ]);

        return redirect('/authentication');
    }

    public function authentication(Request $request){
        return "ok";
    }
}
