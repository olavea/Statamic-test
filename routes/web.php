<?php

use Illuminate\Support\Facades\Route;
use App\Models\Omvei;





// I'm building a Minimal Viable Datamodel with as few distractions as possible
// Create Omvei Gateway, in ep (16)
Route::get('/gateways/create', function () {
    // request()->validate([
    //     'name' => ['required', 'min:3'],
    // ]);  // later
    return view('gateways.create');
});

// store your Omvei Gateway in the database 
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
    // or is this where a user should add locations?
    dd('Edit Your named Gateway');
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
