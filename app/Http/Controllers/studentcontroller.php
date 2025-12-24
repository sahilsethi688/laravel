<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    //
    public function index()
    {
        return 'hello from controller';
    }

    public function aboutus($id,$name)
    {
        // return 'Id No'.$id .'Name'.$name;s
        return view('aboutus',compact('id','name'));

    }

}
