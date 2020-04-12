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

    public function addBusCounter(Request $request)
    {
        return view('busManagerViews.addBusCounter');
    }

    public function insertBusCounter(Request $request)
    {
        $validation = $request->validate([
            'name'=>'required',
            'location' => 'required',
            'operator'=>'required|email|unique:bus_counters'
        ]);

        if($validation != null){
            DB::table('bus_counters')->insert(
                ['name' => $request->name, 'location' => $request->location, 'operator'=>'fahim@gmail.com']
            );

            $request->session()->put('insertBusCounter', $request->email);
            return redirect('/supportStuffList');
        }
    }
}
