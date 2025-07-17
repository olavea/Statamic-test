<?php

use Illuminate\Support\Facades\Route;
use App\Models\Omvei;

// Create Ahoy, in ep (16)
Route::get('/gateways/create', function () {
    // request()->validate([
    //     'name' => ['required', 'min:3'],
        
    // ]); later
    return view('gateways.create');
});

// store

Route::post('/gateways', function () {
    // request()->validate([
    //     'name' => ['required', 'min:3'],
        
    // ]); later
    Omvei::create([
        'name' => request('name'),
        'location' => request('location')
    ]);

    return redirect('/gateways');
});

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);
