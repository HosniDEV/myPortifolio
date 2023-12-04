<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use MailchimpMarketing\ApiClient;
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
    return view('home');
});

Route::post('/',[PostController::class,'store'])->name('post.store');

// Route::get('ping',function(){
//     $mailchimp = new \MailchimpMarketing\ApiClient();

//     $mailchimp->setConfig([
//         'apiKey' => '478f1c78f5f51f58d0addd2bb7fe584e-uc13',
//         'server' => 'uc13',
//     ]);

//     $response = $mailchimp->ping->get();
//     print_r($response);
// });

