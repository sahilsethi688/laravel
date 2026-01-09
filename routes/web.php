<?php

use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\TeachersController;
use App\Models\teachers;
use Illuminate\Support\Facades\Route;

// Root route to avoid 404 on visiting `/`
Route::get('/', function () {
	return view('welcome');
});

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test' , function () {
//     return view('test');
// });

// Route::get('about',function(){
//     return 'about us';

// });

// Route::prefix('details')->group(function(){
//     Route::get('students',function(){
//         return'this is a students';
//     })->name('students-details'); 
    
//     route::get('teachers',function(){//----------------------------------->grouping
//         return'this is a teachers';
//     })->name('teachers-details');
// }); 

// route::get('students/{id}/{reg}',function($id,$reg){
//     return'student number'.$id. 'registration number'.$reg;//----------->parameter
// });

// route::fallback(function(){
//     return'this page is not found try again';//---------------->fallback
// });

// route::get('about-us',function(){
//     $name = 'tester';
//     $email = 'tester2gmail.com';
//     return view('aboutus')->with('name',$name)->with('email',$email);//---->first example route to view
//     return view('aboutus',compact('name','email'));//------>second example route to view
//     return view('aboutus',['name'=>$name,'email'=>$email]);//-------->third example we can send data route to view
// });
// Route::get('/aboutus' , function () 
//     {
//         $name = 'tester';
//     $email = 'tester2gmail.com';
//     return view('aboutus')->with('name',$name)->with('email',$email);
// });
// route::controller(studentcontroller::class)->group(function(){
// route::get('students','index');
// route::get('aboutus/{id}/{name}','aboutus');
// });


// route::get('aboutus/{id}/{name}',[studentcontroller::class,'aboutus']);


// route::get('teachers',function() {
// return teachers::all();
// });

// route::get('teachers',[TeachersController::class,'index']);
// route::get('add-teacher',[TeachersController::class,'add']);
// route::get('show-teacher/{id}',[TeachersController::class,'show']);
// route::get('update-teacher/{id}',[TeachersController::class,'update']);
// route::get('delete-teacher/{id}',[TeachersController::class,'delete']);


route::get('add-data',[studentcontroller::class,'adddata']);
route::get('get-data',[studentcontroller::class,'getdata']);