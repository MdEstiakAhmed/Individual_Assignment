<?php

namespace App\Http\Controllers\GeneralController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
            DB::table('users')->insert(
                ['name' => $request->name, 'email' => $request->email, 'password'=>$request->password, 'registered'=>date("d/m/Y"), 'validated'=> 1, 'role'=>'bus.manager', 'company'=>$request->company, 'operator'=>null]
            );

            $request->session()->put('tempEmail', $request->email);
            return redirect('/');
        }

    }
}
