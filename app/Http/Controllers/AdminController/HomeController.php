<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('id')){
            $users = User::all()
            ->where('role', '=', 'bus.manager');
            
            return view('adminViews.managerList', ['users'=>$users]);
        }
    }
}
