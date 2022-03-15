<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
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
    public function viewdata()
    {
  

       return view('home');
    }
}
