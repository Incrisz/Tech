<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Love;
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
        $birthdays = Member::whereRaw('MONTH(dob) = MONTH(NOW())')->get();
        // $birthdays = Member::all();
        $loves = Love::whereRaw('MONTH(created_at) = MONTH(NOW())')->get();
        $members = Member::all();
        // $loves = Love::all();
        return view('backend.dashboard',compact('birthdays','members','loves'));
    }
 
}
