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
                'Question'=>'Question 1',
                'Answer'=>'Answer1 You need to be atleast 50 years of age',
            ],
            [
                'Question'=>'Question 2',
                'Answer'=>' Answer 2You need to be atleast 50 years of age',
            ],
            [
                'Question'=>'Question 3',
                'Answer'=>'Answer 3You need to be atleast 50 years of age',
            ],
        ]        
    ];
    $faqs=[
        'data'=>[]  
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
    return view('blog');
});
