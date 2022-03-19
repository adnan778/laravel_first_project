<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\user;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Support\Facades\Session;
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
     
       $data=Blog::all();

       return view('home',compact('data'));
    }
    public function profilepage()
    {
        $users = DB::table('users')->where('id',Auth::user()->id)->first();
        
        return view('profile')->with('users', $users);
    }
    public function updateprofile(Request $request)
    {
    
        // $file_extention = $request['image']->getClientOriginalExtension();
        // $file_name = time().rand(99,999).'image.'.$file_extention;
        // $file_path = $request['image']->move('image',$file_name);
    
            $data=user::find(Auth::user()->id);
            $data->name=$request->name;
            $data->email=$request->email;
            $data->phone=$request->phone;
            $data->date=$request->date;
            $data->gander=$request->gander;
            // $data->image=$file_path;
            $data->update();
            Session::flash('success',' Your profile has been updated! ');
        
            return redirect()->route('profile');
    }

    // profileChange
    public function profileChange()
    {

        $profilePic = DB::table('users')->where('id',Auth::user()->id)->first();
        
        return view('fontpage.profilePic')->with('users', $profilePic);
    }
    // updateimage
    public function updateimage(Request $request)
    {
    
        $file_extention = $request['image']->getClientOriginalExtension();
        $file_name = time().rand(99,999).'image.'.$file_extention;
  $file_path = $request['image'];




        $file_path =Image::make($file_path)->resize(300, 300);

        $file_path->save($file_name);
    
            $data=user::find(Auth::user()->id);
            $data->image=$file_name;
            $data->update();
            Session::flash('success',' Your profile Picture has been Changed! ');
            return redirect()->route('changeProfilePicture');
    }
    public function newPostAdd()
    {
   return view('fontpage.addPost');
    }
}
