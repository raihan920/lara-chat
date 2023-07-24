<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;

Route::get('/chat',function(){
    return view('chat');
});

Route::post('send-message', function(Request $request){
    event(new PusherBroadcast($request->username, $request->message));
    return ['success'=>true];
});
