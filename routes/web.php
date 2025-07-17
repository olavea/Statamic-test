<?php

use Illuminate\Support\Facades\Route;



Route::get('gateways/create', function () {
    return view('gateways.create');
});

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);
