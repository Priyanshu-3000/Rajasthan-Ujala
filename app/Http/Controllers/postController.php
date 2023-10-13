<?php

namespace App\Http\Controllers;
use DB;
use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        $post = DB::select('select * from post');
        return view('post', ['post' => $post]);
    }

    public function post(Request $request){
        

      
        $request->validate([
            'title'=> 'required',
            'short_description'=> 'required',
            'long_description'=> 'required',
            'News_Type'=> 'required',
            'Author'=> 'required',
            'file'=> 'required',

        ]);
        
        $blog = new post;
        $blog ->title=$request['title'];
        $blog ->short_description=$request['short_description'];
        $blog ->long_description=$request['long_description'];
        $blog ->News_Type=$request['News_Type'];
        $blog ->Author=$request['Author'];
        $blog ->file=$request['file'];
        $blog-> save();
    //  return view('post');
}
}