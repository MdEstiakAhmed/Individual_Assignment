<?php

namespace App\Http\Controllers\GeneralController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        
        if($validation != null){
            $user = DB::table('users')
                    ->where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();

            
            if($user != null){
                $userData = json_encode($user->id);
                $request->session()->put('id', $userData);
                return redirect('/home');
            }
            else{
                return redirect('/');
            }
        }
    }

    public function authorization(Request $request){
        if($request->session()->has('id')){
            $user = DB::table('users')
                        ->where('id', $request->session()->get('id'))
                        ->first();
    
            $user_type = json_encode($user->role);
            if($user_type == json_encode("admin")){
                return view('adminViews.home');
            }
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('/');
        }
    }
}
