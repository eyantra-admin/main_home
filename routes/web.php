<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
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
    return view('welcome');
});
Route::get('/carousel', function () {
    return view('carousel');
})->name('carousel');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/games', [Home\HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');


Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/*School Routes Starts*/

Route::get('/schools', [Home\HomeController::class, 'school_present'])->name('school_present');
Route::get('/index', [Home\HomeController::class, 'index'])->name('index');

Route::post('/getStateSchool', [Home\HomeController::class, 'getStateSchool'])->name('getStateSchool');
Route::post('/getSchoolName', [Home\HomeController::class, 'getSchoolName'])->name('getSchoolName');

Route::post('/school_records', [Home\HomeController::class, 'school_records'])->name('school_records');
/*School Routes Ends*/

Route::get('/elsi', [Home\HomeController::class, 'elsiFamily'])->name('elsiFamily');

Route::get('/country', [Home\HomeController::class, 'country'])->name('country');
Route::post('/getstates', [Home\HomeController::class, 'getState'])->name('getstates');
Route::post('/elsi_colleges', [Home\HomeController::class, 'geteLSIColleges'])->name('elsiColleges');

Route::get('/eyrc', [Home\HomeController::class, 'eyrc'])->name('eyrc');
Route::post('/stats_yearwise', [Home\HomeController::class, 'stats_yearwise'])->name('stats_yearwise');

Route::get('/eysip', [Home\HomeController::class, 'eysip'])->name('eysip');
Route::post('/eysip_yearwise', [Home\HomeController::class, 'eysip_yearwise'])->name('eysip_yearwise');

Route::get('/publications', [Home\HomeController::class, 'publications'])->name('publications');
Route::get('/achievements', function () {
    return view('achievements');
})->name('achievements');

Route::get('/efsi', function () {
    return view('efsi');
})->name('efsi');

Route::get('/eysrc', function () {
    return view('eysrc');
})->name('eysrc');

Route::get('/eyic', function () {
    return view('eyic');
})->name('eyic');

Route::get('/eyrdc', function () {
    return view('eyrdc');
})->name('eyrdc');

Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');

Route::get('/mooc', function () {
    return view('mooc');
})->name('mooc');

Route::get('/placements', function () {
    return view('placements');
})->name('placements');


Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/productsdtl', function () {
    return view('productsdtl');
})->name('productsdtl');

Route::get('/hardware_doc', [Home\HomeController::class, 'hardware_doc'])->name('hardware_doc');
Route::get('/software_doc', [Home\HomeController::class, 'software_doc'])->name('software_doc');
Route::get('/eylfa_doc', [Home\HomeController::class, 'eylfa_doc'])->name('eylfa_doc');

    //get log info
Route::prefix('admin')->group(function () {
Route::get('downloadLogFile', 'LogController@downloadLogFile');
Route::get('viewLogFile', 'LogController@viewLogFile');
Route::get('eraseLogFile', 'LogController@eraseLogFile');
});

Route::get('/log/downloadLogFile/{year}/{month}/{date}', 'LogController@downloadLogFile');
Route::get('/log/viewLogFile/{year}/{month}/{date}', 'LogController@viewLogFile');
Route::get('/log/eraseLogFile/{year}/{month}/{date}', 'LogController@eraseLogFile');

Route::get('/videos', [Home\HomeController::class, 'videos'])->name('videos');

Route::get('/press', function () {
    return view('press');
})->name('press');

Route::get('/logo1PdfDownload', [Home\HomeController::class, 'eyantra1PdfDownload'])->name('logo1PdfDownload');
Route::get('/logo2PdfDownload', [Home\HomeController::class, 'eyantra2PdfDownload'])->name('logo2PdfDownload');
Route::get('/eyantracdrDownload', [Home\HomeController::class, 'eyantracdrDownload'])->name('eyantracdrDownload');
/*Login Credentials*/
Route::get('/LoginCredentials', [App\Http\Controllers\Home\HomeController::class, 'login_credentials'])
    ->middleware(['auth'])
    ->name('login_credentials');

Route::get("/events", function(){
   return \File::get(public_path() . '/events/index.html');
});


Route::get("/playground", function(){
   return \File::get(public_path() . '/playground/index.html');
});

require __DIR__.'/auth.php';
