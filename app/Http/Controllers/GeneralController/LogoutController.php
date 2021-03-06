<?php

namespace App\Http\Controllers\GeneralController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function index(Request $request){
    	$request->session()->flush();
    	return redirect('/');
    }
}
