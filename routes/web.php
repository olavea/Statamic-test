<?php

use Illuminate\Support\Facades\Route;


// Create Ahoy, in ep (16)
Route::get('gateways/create', function () {
    // request()->validate([
    //     'name' => ['required', 'min:3'],
        
    // ]); later
    return view('gateways.create');
});



// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);
