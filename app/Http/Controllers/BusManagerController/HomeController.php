<?php

namespace App\Http\Controllers\BusManagerController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function busCounterList(Request $request)
    {
        if($request->session()->has('id')){

            $busCounters = DB::table('bus_counters')
                        ->where('operator', 'fahim@gmail.com')
                        ->get();

            // $users = User::all();

            return view('busManagerViews.busCounterList', ['busCounters'=>$busCounters]);
            // return ($user);
        }
    }
}
