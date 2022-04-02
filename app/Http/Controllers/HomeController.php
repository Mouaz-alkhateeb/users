<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }
    public function control()
    {
        if(Auth::user()->role==3){    
        return redirect ('/');
        }
        $users=DB::table('users')->get();
        return view('control',compact('users'));
    }

    public function updateRole(Request $request,User $user )
    {
        $user->update($request->all());
        return redirect('control');
    }
}
