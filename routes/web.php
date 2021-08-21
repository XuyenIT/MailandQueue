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
    return view('welcome');
});
Route::get('send-mail',function (){
   $details = [
     'title'=>"Mail from Xuyen Le.Com",
       'body'=>"this is for testting email using smtp",
   ];
   \Illuminate\Support\Facades\Mail::to('letuanxuyen92@gmail.com')->send(new \App\Mail\MyTestMail($details));
   dd("Email is send");
});
Route::get('run-job',function (){
    dispatch(new \App\Jobs\SendEmailJob());
    dd('done');
});
