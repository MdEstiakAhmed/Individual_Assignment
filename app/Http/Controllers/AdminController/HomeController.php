<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('id')){
            $users = User::all()
            ->where('role', '=', 'bus.manager');

            return view('adminViews.managerList', ['users'=>$users]);
        }
    }

    public function stuffList(Request $request)
    {
        if($request->session()->has('id')){
            $users = User::all()
            ->where('role', '=', 'support.stuff');

            return view('adminViews.supportStuffList', ['users'=>$users]);
        }
    }

    public function delete($id){
        if(User::destroy($id)){
            Request()->session()->put('deleteMessage', 'successfully delete');
            return redirect('/busManagerList');
        }
        else{
            Request()->session()->put('deleteMessage', 'Can not delete');
            return redirect('/busManagerList');
        }
    }

    public function search() {
        $search_text = Request::get('keyword');
        if ($search_text==NULL) {
            $data= User::all();
        } else {
            $data=User::where('name','LIKE', '%'.$search_text.'%')->get();
        }
        return view('adminViews.supportStuffList')->with('users',$data);
    }

    public function addSupportStuff(Request $request)
    {
        return view('adminViews.addSupportStuff');
    }

    public function InsertSupportStuff(Request $request)
    {
        $validation = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3',
            'confirmPassword'=>'required|same:password'
        ]);

        if($validation != null){
            DB::table('users')->insert(
                ['name' => $request->name, 'email' => $request->email, 'password'=>$request->password, 'registered'=>date("d/m/Y"), 'validated'=> 1, 'role'=>'support.stuff', 'company'=>null, 'operator'=>null]
            );

            $request->session()->put('insertStuff', $request->email);
            return redirect('/supportStuffList');
        }
    }

    public function busList(Request $request)
    {
        if($request->session()->has('id')){

            $buses = DB::table('buses')
                        ->get();

            return view('adminViews.busList', ['buses'=>$buses]);
        }
    }

    public function addBus(Request $request)
    {
        if($request->session()->has('id')){
            return view('adminViews.addBus');
        }
        
    }

    public function insertBus(Request $request)
    {
        if($request->session()->has('id')){
            $validation = $request->validate([
                'name'=>'required',
                'operator'=>'required|email',
                'location'=>'required',
                'seat_row'=>'required',
                'seat_column'=>'required'
            ]);
    
            if($validation != null){
                DB::table('buses')->insert(
                    ['name' => $request->name, 'operator' => $request->operator, 'location'=>$request->location, 'seat_row'=>$request->seat_row, 'seat_column'=>$request->seat_column]
                );
    
                $request->session()->put('insertBus', $request->name);
                return redirect('/busList');
            }
        }
    }

    public function editBus(Request $request)
    {
        if($request->session()->has('id')){
            $buses = DB::table('buses')
                        ->get();
            return view('adminViews.editBus', ['buses'=>$buses]);
        }
    }
}
