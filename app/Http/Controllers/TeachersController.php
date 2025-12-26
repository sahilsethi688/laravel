<?php

namespace App\Http\Controllers;

use App\Models\teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //

    public function index()
    {
        return teachers::all();
    }

    public function add()
    {
        $item = new teachers();
        $item-> name = 'test name';
        $item-> save();

        return 'added successfully';
    }

    public function show($id)
    {
        $item=teachers::findorfail($id);
        return $item;
    }
}
