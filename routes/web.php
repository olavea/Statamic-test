<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

// Route::get('/fest', function () {
//     return view('fest', [
//         'jobs' => [
//             ['id' => 1, 'title' => 'Director'],
//             ['id' => 2, 'title' => 'Programmer'],
//             ['id' => 3, 'title' => 'Teacher'],
        
            
//         ]
//     ]);
// });

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

// Route::get('/fest/{id}', function ($id) {
//     dd($id);
// });

// Route::get('/jobs/{id}', function ($id) {
//     $jobs = [
//         ['id' => 1, 'title' => 'Director'],
//         ['id' => 2, 'title' => 'Programmer'],
//         ['id' => 3, 'title' => 'Teacher'],
//     ];

//     $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
        
    
    // $job = collect($jobs)->first(fn ($job) => $job['id'] == $id);

//     if (!$job) {
//         abort(404);
//     }

//     return view('job', ['job' => $job]);
// });