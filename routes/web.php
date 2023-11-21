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

    $data = [
        'title' => 'Home'
    ];

    return view('Users/home', $data);
});
Route::get('/about', function () {
    $data = [

        'title' => 'About'
    ];

    return view('Users/about', $data);
});
Route::get('/collections', function () {
    $posts = [
        [
            'id' => 1,
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quasi et autem, sed rem culpa eos id est repellat
explicabo quibusdam eveniet quas, mollitia alias suscipit facilis? Quas incidunt pariatur fuga neque nesciunt ab minus,
eum impedit cumque velit dolorem officiis quasi exercitationem ipsa modi iure suscipit vero optio dignissimos!
'
        ],
        [
            'id' => 2,
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quasi et autem, sed rem culpa eos id est repellat
explicabo quibusdam eveniet quas, mollitia alias suscipit facilis? Quas incidunt pariatur fuga neque nesciunt ab minus,
eum impedit cumque velit dolorem 
'
        ],
        [
            'id' => 3,
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quasi et autem, sed rem culpa eos id est repellat
explicabo quibusdam eveniet quas,
'
        ],
    ];
    $data = [

        'title' => 'Collections',
        'collections' => $posts
    ];

    return view('Users/collections', $data);
});
