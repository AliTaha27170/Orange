<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SystingController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group([
    'prefix'     => LaravelLocalization::setLocale() ,
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]

], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Route::get('/', [PageController::class , 'index']  )->name('index');
    Route::get('/events'  , [PageController::class , 'events']  )->name('events');
    Route::get('/search'  , [PageController::class , 'search']  )->name('search');
    Route::get('/lights'  , [PageController::class , 'lights']  )->name('lights');
    Route::get('register' , [AuthController::class , 'RegisterShow' ])->name('Register');
    Route::get('login' ,function ()
    {
        return redirect(route('voyager.login'));
    })->name('login');

    Route::post('register', [AuthController::class , 'Register' ])->name('RegisterPost');

    Route::get('/contact', [PageController::class , 'contact']  )->name('contact');
    Route::post('/contact', [PageController::class , 'contact_post']  )->name('contact_post');
    Route::post('/mail', [PageController::class , 'mail_post']  )->name('mail');



Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



Route::group([
    'middleware' => 'auth'
], function()
{



/* حجز القاعات  */

//Store Data
Route::post('rooms/store', [RoomsController::class  , 'store'])->name('WorkSpace' );
Route::post('booking'    , [BookingController::class, 'store'])->name('booking' );


//booking
Route::get('booking/{id}'  , function($id){
    return view("booking",with(["id"=>$id]));
})->name('boo');

Route::get('room/{id}'  , [AdminController::class, 'room'      ])->name('room'  );
Route::get('delete/{id}', [AdminController::class, 'delete'    ])->name('delete' );

/* حجز القاعات  */


/*  باقة سند  */
Route::get('register_now',[PageController::class , 'register_now'])->name('register_now');
Route::post('register_now_post',[PageController::class , 'register_now_post'])->name('register_now_post');


}
);



});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});

Route::get('/logout', function(){
    Auth::logout();
    return back();
 })->name('logout');


Route::post('pachj56i8yi'  , [SystingController::class  , 'pack'])->name('pack' );
Route::post('pachsj56i8yi'  , [SystingController::class  , 'mzaya'])->name('mzaya' );
Route::get('tools'  , [SystingController::class, 'tools' ])->name('tools'  );
