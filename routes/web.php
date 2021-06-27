<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/home', [JobController::class, 'home'])->name('home');
Route::get('/jobs/{id}', [JobController::class, 'status'])->name('status');

Auth::routes([

    'register' => false, // Register Routes...

    'reset' => false, // Reset Password Routes...

    'verify' => false, // Email Verification Routes...

]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('jobs', JobController::class);

Route::any('/search', function (Request $request) {
    $q = $request->search;
    $jobs = Job::where('name', 'LIKE', '%' . $q . '%')->paginate(5);
    return view('searchPage', compact('jobs'));
    // if (count($jobs) > 0) {
    //     return view('searchPage', compact('jobs'));
    // } else {
    //     return back();
    // }
})->name('search');
