<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Auth, Hash;
use App\Models\user;
class BlogPost extends Controller
{
    public function abpost(Request $request)
    {
    //  dd($request);
        $blogpost=new Blog;
        $blogpost->title=$request->title;
        $blogpost->dec=$request->dec;
       $blogpost->save();

       return redirect()->route('newPostAdd');
    }
   

       
    // changePassword
    public function changePassword()
    {
      return view('changePassword');
    }
    // updatePassword

    public function updatePassword(Request $request)
    {
       $request->validate([
                 'oldpassword'=>'required',
                 'newpassword' => 'required|string|min:8',
                 'confirmpassword' => 'required',
       ]);

if(!Hash::check($request->oldpassword,Auth()->user()->password)){

return back()->with("error","Old password does't match!");

}elseif($request->newpassword===$request->confirmpassword){
 
  $pass=user::find(Auth::user()->id);
  $pass->password=Hash::make($request->newpassword);
  $pass->update();
  return back()->with("success","Your password was changed");


}
return back()->with("error","password does't match!");







    }
}
