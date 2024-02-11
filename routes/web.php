<?php

use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\ProductController;

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
Route::middleware('cache.headers:public;max_age=3600')->group(function () {
    Route::get('/', [IndexController::class, 'home'])->name('home');
});


Route::get('/about', [IndexController::class, 'about']);

Route::post('/search-products', [IndexController::class, 'search']);


Route::get('/policies', [IndexController::class, 'policies']);
Route::get('/useful-links', [IndexController::class, 'usefulLinks']);

Route::group(['prefix' => '/support'], function ($router) {
    Route::get('/{slug}', [IndexController::class, 'support'])->where('slug','video-tutorial|faq|approved-installers|software-update|technical-support');
    Route::match(['get', 'post'],'/warranty-registration', [IndexController::class, 'registration']);
});

Route::group(['prefix' => '/product'], function ($router) {
    Route::get('/{slug}',[IndexController::class, 'product'])->where('slug','photo-gallery|where-to-buy|lithium-batteries-dealers');
});

Route::get('/{slug}',[IndexController::class, 'accessories'])->where('slug','battery-monitor|battery-charger|solar-ventilation|voltage-regulator|plastic-case|metal-case|batteries|batteries-small|batteries-large|solar-fan|solar-panels|solar-regulators|portable-power|pure-sine-wave-inverters|power-outlets|discontinued-items');


Route::get('/{cateSlug}/{product}',[IndexController::class, 'detail'])->where('cateSlug','battery-monitor|battery-charger|product|solar-ventilation|voltage-regulator|plastic-case|metal-case|batteries|batteries-small|batteries-large|solar-fan|solar-panels|solar-regulators|portable-power|pure-sine-wave-inverters|power-outlets|discontinued-items');


Route::get('/news', [IndexController::class, 'news']);
Route::get('/news/{slug}', [IndexController::class, 'newsDetail']);

Route::get('/blogs', [IndexController::class, 'blogs']);
Route::get('/blogs/{slug}', [IndexController::class, 'blogDetail']);

Route::match(['get', 'post'],'/contact', [IndexController::class, 'submitFeedback']);


Route::group(['prefix' => '/admin'], function ($router) {

    Route::group(['middleware' => 'auth'], function ($router) {
        Route::get('/', 'DashboardController@index')->name('admin');
        Route::resource('/products','ProductController');
        Route::get('/products/{product}/visible','ProductController@ajaxVisible');
        Route::get('/products-sort','ProductController@ajaxSort');

        Route::resource('/cates','CateController');
        Route::get('/cates-sort','CateController@ajaxSort');

        Route::resource('/blogs','BlogController');
        Route::get('/blogs/{blog}/visible','BlogController@ajaxVisible');
        Route::get('/blogs-sort','BlogController@ajaxSort');

        Route::resource('/news','NewsController',['except' => ['edit','update','destroy']]);
        Route::put('/news/{blog}','NewsController@update');
        Route::delete('/news/{blog}','NewsController@destroy');
        Route::get('/news/{blog}/edit','NewsController@edit');
        Route::get('/news/{blog}/visible','NewsController@ajaxVisible');
        Route::post('/news/import','NewsController@import');
        Route::get('/news-sort','NewsController@ajaxSort');

        Route::resource('/faqs','FaqController',['except' => ['edit','update','destroy']]);
        Route::put('/faqs/{blog}','FaqController@update');
        Route::delete('/faqs/{blog}','FaqController@destroy');
        Route::get('/faqs/{blog}/edit','FaqController@edit');
        Route::get('/faqs/{blog}/visible','FaqController@ajaxVisible');
        Route::get('/faqs-sort','FaqController@ajaxSort');

        Route::resource('/contacts','ContactController');

        Route::get('/warranty','ContactController@warranty');

        Route::post('/contacts/import','ContactController@import');


        Route::resource('/dealers','DealerController');
        Route::get('/dealers/{dealer}/visible','DealerController@ajaxVisible');
        Route::get('/dealers-sort','DealerController@ajaxSort');


        Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


    });

    //admin user
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');

    // Password Reset Routes...
    Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/test-mail', function () {
    return view('mails.invited_code');
});
//Auth::routes(['register' => false]);
