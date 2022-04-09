<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 
    public function index()
    {
        $members = Member::all();
        return view('members.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
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
            'fullname' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'sex' => 'required',
            'marital_status' => 'required',
            'occupation' => 'required',
            'member_since' => 'required',
            'image' => 'required',
        ]);
    
        $image = $request->image;
       $hidurl = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $hidurl.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('member'))
            {
                Storage::disk('public')->makeDirectory('member');
            }

            $memberImage = Image::make($image)->save();
            Storage::disk('public')->put('member/'.$imageName,$memberImage);

        } else {
            $imageName = "default.png";
        }
        $member = new Member();
       // $member->user_id = Auth::id();
        $member->fullname = $request->fullname;
        if(isset($image))
        {
         $member->image = $imageName;
        }
        $lastupdated =$request->dob;
       // $lastupdated = date('Y-m-d');
        

        // $timestamp = strtotime($lastupdated);
        // $win = date('Y/m/d', $timestamp);
        $member->dob = $lastupdated;
        // $member->dob = $request->dob;
        $member->email = $request->email;
        $member->city = $request->city;
        $member->state = $request->state;
        $member->country = $request->country;
        $member->phone = $request->phone;
        $member->address1 = $request->address1;
        $member->address2 = $request->address2;
        if(isset( $request->sex))
        {
            $member->sex = $request->sex;
        }
        if(isset(  $request->marital_status))
        {
            $member->marital_status = $request->marital_status;
        }
      
        $member->occupation = $request->occupation;
        $member->member_since = $request->member_since;
       
       
        $member->save();

        Toastr::success('Member Successfully Saved :)','Success');
        return redirect()->route('members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        
        // $user = User::find($id);

        return view('members.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
      
        return view('members.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $this->validate($request,[
            'fullname' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            // 'sex' => 'required',
            // 'marital_status' => 'required',
            'occupation' => 'required',
            'member_since' => 'required',
            // 'image' => 'required',
        ]);
    
        $image = $request->image;
       $hidurl = str_slug($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $hidurl.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('member'))
            {
                Storage::disk('public')->makeDirectory('member');
            }

            $memberImage = Image::make($image)->save();
            Storage::disk('public')->put('member/'.$imageName,$memberImage);

        } else {
            $imageName = "default.png";
        }
        // $member = new Member();
       // $member->user_id = Auth::id();
        $member->fullname = $request->fullname;
        if(isset($image))
        {
         $member->image = $imageName;
        }
        $lastupdated =$request->dob;
        // $lastupdated = date('Y-m-d H:i:s');
        // $member->dob = $lastupdated;
        // $timestamp = strtotime($lastupdated);
        // $win = date('Y/m/d', $timestamp);
        $member->dob = $lastupdated;
        // $member->dob = $request->dob;
        $member->email = $request->email;
        $member->city = $request->city;
        $member->state = $request->state;
        $member->country = $request->country;
        $member->phone = $request->phone;
        $member->address1 = $request->address1;
        $member->address2 = $request->address2;
        if(isset( $request->sex))
        {
            $member->sex = $request->sex;
        }
        if(isset(  $request->marital_status))
        {
            $member->marital_status = $request->marital_status;
        }
      
        $member->occupation = $request->occupation;
        $member->member_since = $request->member_since;
       
       
        $member->save();

        Toastr::success('Member Successfully Updated :)','Success');
        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        if (Storage::disk('public')->exists('member/'.$member->image))
        {
            Storage::disk('public')->delete('member/'.$member->image);
        }
       
        $member->delete();
        Toastr::success('member Successfully Deleted :)','Success');
        return redirect()->back();
    }

 
}
