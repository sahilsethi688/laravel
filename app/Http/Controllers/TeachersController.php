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
    public function update($id)
    {
        $item = teachers::findorfail($id);
        $item->name='updated teacher';
        $item->update();
        
        return'updated successfully';

}
public function delete($id)
{
    $item =teachers::findOrFail($id);
    $item->delete();

    return'kuuuli delete';
}
}