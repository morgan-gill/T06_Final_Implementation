<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('auth.register');
});

Route::get('/confirm', function () {
    return view('confirm');
})->name('confirm');

Route::get('/dashboard', function () {
    return view('logged_user.dashboard');
});

Route::get('/inbox', function () {
    return view('logged_user.inbox');
});

Route::get('/contact', function () {
    return view('logged_user.contact');
});

Route::get('/create_proposal_finished', function () {
    return view('logged_user.create_proposal_finished');
});

Route::get('/error', function () {
    return view('logged_user.error');
});

Route::get('/create_proposal_review', function () {
    return view('logged_user.create_proposal_review');
});

Route::get('/users', function () {
    return view('admin.users');
});
Route::get('/inquiries', function () {
    return view('admin.inquiries');
});


Route::get('/user', function () {
    return view('admin.user');
});

Route::get('/send_warning', function () {
    return view('admin.send_warning');
});

Route::get('/admin_dashboard', function () {
    return view('admin.admin_dashboard');
});


Auth::routes();
/*
//Disable public registration
Auth::routes(['register'=>false]);
//Enable email verification
Auth::routes(['verify'=>true])
*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/step_1', 'HomeController@createPropStep1')->name('step_1');
Route::get('/step_2', 'HomeController@createPropStep2')->name('step_2');
Route::get('/step_3', 'HomeController@createPropStep3')->name('step_3');
Route::get('/step_4', 'HomeController@createPropStep4')->name('step_4');
Route::get('/step_5', 'HomeController@createPropStep5')->name('step_5');
Route::get('/step_6', 'HomeController@createPropStep6')->name('step_6');

Route::get('/inquiries', 'HomeController@getInquiries')->name('inquiries');

Route::get('/proposal_review', 'HomeController@storeProposalReview')->name('proposal_review');
Route::get('/user/{id}', 'HomeController@getUser')->name('admin.user');




Route::post('/submitStep1','HomeController@storeStep1')->name('submitStep1');
Route::post('/submitStep2','HomeController@storeStep2')->name('submitStep2');
Route::post('/submitStep3','HomeController@storeStep3')->name('submitStep3');
Route::post('/submitStep4','HomeController@storeStep4')->name('submitStep4');
Route::post('/submitStep5','HomeController@storeStep5')->name('submitStep5');
Route::post('/submitStep6','HomeController@storeStep6')->name('submitStep6');

Route::post('/submitInquiry','HomeController@submitInquiry')->name('submitInquiry');
Route::patch('/inquiries/{inquiry}/complete', 'HomeController@updateInquiryStatus');

Route::get('/create_proposal_finished','HomeController@storeProjectFile')->name('create_proposal_finished');
Route::get('/downloadPDF','HomeController@downloadPDF');
Route::get('/viewPDF','HomeController@viewPDF');
Route::patch('/user/delete/{id}', 'HomeController@deleteUser')->name('user.delete');
Route::post('/users','HomeController@getUsers')->name('admin.users');


/* Registration Routes */
Route::post('/register','Auth\RegisterController@register')->name('register');

/* Chat Routes */
Route::get('/inbox', 'HomeController@inbox');
Route::get('/messages', 'HomeController@fetchMessages');
Route::post('/messages', 'HomeController@sendMessage');
