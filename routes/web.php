<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    
    $faqs= [
        'data'=>[
            [
                'Question'=>'How do I use the app for the first time?',
                'Answer'=>'Answer1 ',
            ],
            [
                'Question'=>'How do I prepare for my date?',
                'Answer'=>' Answer 2',
            ],
            [
                'Question'=>'What safety measures can I take going on a date ',
                'Answer'=>'Answer 3',
            ],
            [
                'Question'=>'Are my personal details safe on your app? ',
                'Answer'=>'Answer 3',
            ],
        ],
        'active'=>'/'       
    ];
    return view('home',$faqs);
});
Route::get('/home', function () {
    // return view('welcome');
        return view('home1');
});

Route::get('/home1', function () {
    // return view('welcome');
        return view('home2');
});

Route::get('/blog', function () {
    // return view('welcome');
    return view('blog',['active'=>'blog']);
});
