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
}
