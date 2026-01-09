<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class studentcontroller extends Controller
{
    //
    public function adddata()
    {
        DB::table('students')->insert([
            [
            'name'=>'testergrfgb',
             'email'=>'tester4444@gmail.com',
             'age'=>15,
             'date_of_birth'=>'2010-01-01',
             'gender'=>'f'
            ],
            [
            'name'=>'testerbdhe',
             'email'=>'testeraWfw@gmail.com',
             'age'=>15,
             'date_of_birth'=>'2010-01-01',
             'gender'=>'f'
            ],             
            [
            'name'=>'hrruds',
             'email'=>'djhsjq@gmail.com',
             'age'=>15,
             'date_of_birth'=>'2010-01-01',
             'gender'=>'f'
            ],                          
        ]);         

        return'added successfully';
    }

    public function getdata()
    {
        $items =DB::table('students')
        ->limit(2)
        // ->where('id',203)
        ->get();
        return $items;

    }

}
