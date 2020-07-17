
<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});



Route::view('/header',"header");

Route::view('/examtypes',"examtypes");

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/discussion', 'SelectionController@discussion')->name('discussion');
Route::get('/exam', 'SelectionController@exam')->name('exam');
Route::get('/calender', 'SelectionController@calendar')->name('calendar');
Route::get('/meetings', 'SelectionController@meetings')->name('meetings');
Route::get('/contacts', 'SelectionController@contacts')->name('contacts');
Route::get('/crm', 'SelectionController@crm')->name('crm');
Route::get('/website', 'SelectionController@website')->name('website');
Route::get('/openeducat', 'SelectionController@openeducat')->name('openeducat');
Route::get('/course', 'SelectionController@course')->name('course');
Route::get('/alumni', 'SelectionController@alumni')->name('alumni');
Route::get('/faculties', 'SelectionController@faculties')->name('faculties');
Route::get('/quiz', 'SelectionController@quiz')->name('quiz');
Route::get('/lms', 'SelectionController@lms')->name('lms');
Route::get('/attendence', 'SelectionController@attendence')->name('attendence');
Route::get('/awards', 'SelectionController@awards')->name('awards');
Route::get('/placements','SelectionController@placements')->name('placements');
Route::get('/add_jobs','SelectionController@add_jobs')->name('add_jobs');
Route::get('/edit_profile','SelectionController@edit')->name('addedit_profile');
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::post('update','StudInsertController@update');
Route::get('upload','StudInsertController@upload');
Route::post('upload','StudInsertController@uploadtodb');
Route::get('change','StudInsertController@change');
Route::get('admit-card','CardController@cards');
Route::post ( '/search','CardController@search');
Route::post ( 'generate','CardController@generate');
Route::get('download', 'CardController@downloadPDF');

