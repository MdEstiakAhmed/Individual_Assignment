<?php

namespace App\Http\Controllers\GeneralController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function index(){
    	return view('generalViews.registration');
    }
}
