<?php

use Illuminate\Support\Facades\Route;
use App\Models\Omvei;





// Create an Omvei Gateway, in ep (16)
Route::get('/gateways/create', function () {
    // request()->validate([
    //     'name' => ['required', 'min:3'],
    // ]);  // later
    return view('gateways.create');
});

// store an Omvei Gateway in the database 
Route::post('/gateways', function () {
    // request()->validate([
    //     'name' => ['required', 'min:3'],
    // ]); // later

    Omvei::create([
        'name' => request('name'),
        'location' => request('location')
    ]);

    return redirect('/gateways');
});

Route::get('/gateways/edit', function () {
    // This is where a user should edit her Omvei gateway, for example add locations and audio and text
    // The edit.blade.php will go in the gateways folder
    dd('Edit Your named Omvei Gateway');
});

// Route::get('/gateways/index', function () {
//     // should we use this as index instead of '/gateways'?
//     return view('gateways.index', [
//         'gateways' => Omvei::all()
//     ]);
// });

Route::get('/gateways', function () {
    return view('gateways.index', [  // an array of Omvei gateways
        'gateways' => Omvei::all()
    ]);
});

Route::get('/gateways/show', function () {
    // it worked even with this dd() inside it! 🥳
    // dd('Click to Edit Your Gateway'); 

});

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);


// Ahoy! Show below, in ep (16) 01:56
// Wildcard routes should come after specific routes like jobs/create to avoid conflicts
Route::get('/gateways/{id}', function ($id) {
    $gateway = Omvei::find($id);

    return view('gateways.show', ['gateway' => $gateway]);
});
