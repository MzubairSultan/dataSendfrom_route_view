<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/neelm', function () {
//     return view('neelm',['keys' =>"hello mr green" , 'city' =>"gujranwala"]);
// });

// 2)Ager hum koi value ase pass kry jo ky java script ki ho to 

//  Route::get('/neelm', function () {
//      return view('neelm',['keys' =>"hello mr green" , 'city' =>'<script>alert("Gujranwala")</script>']);
//  });

// // 3) method to pass a value from rotue to view
//  Route::get('/neelm', function () {
//     return view('neelm')->with('city',"");
// });


// 4) passing Single Dimension array from the route to View

//---------------------------------------
// Route::get('/neelm', function () {
//     $cars = ["Volvo", "BMW", "Toyota"];
//     return view('neelm',['keys'=>$cars]);
// });
//--------------------------------------------------------
