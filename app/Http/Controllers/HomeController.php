<?php

namespace App\Http\Controllers;
use App\Models\Member;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$birthdays = Member::whereRaw('MONTH(dob) = MONTH(NOW())')->get();
        $birthdays = Member::all();
        $members = Member::all();
        return view('backend.dashboard',compact('birthdays','members'));
    }
 
}
