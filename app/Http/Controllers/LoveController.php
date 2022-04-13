<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Love;
use Illuminate\Http\Request;

class LoveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loves = love::all();
        return view('love.index',compact('loves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('love.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'amount' => 'required',
        ]);
        $love = new Love();
         $love->amount = $request->amount;
         $love->save();

         Toastr::success('love Successfully Saved :)','Success');
         return redirect()->route('love.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function show(Love $love)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function edit(Love $love)
    {
        
        return view('love.edit',compact('love'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Love $love)
    {
        $this->validate($request,[
            'amount' => 'required',
        ]);
     
         $love->amount = $request->amount;
         $love->save();

         Toastr::success('love Successfully Updated :)','Success');
         return redirect()->route('love.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function destroy(Love $love)
    {
        $love->delete();
        Toastr::success('love Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
