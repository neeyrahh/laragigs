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
    return view('listings',[
        'heading' => 'latest listings',
        'listings' => [
            [
            'id' => 1,
            'title'=>'Listing One',
            'description'=>'being selfless, caring, compassionate, and unconditionally kind. Like love, it takes practice to understand and feel it. We share love with others through kind acts such as a smile, a nice word, an unexpected deed, or a planned surprise.'
            ],
            [
                'id' => 2,
                'title'=>'Listing Two',
                'description'=>'being selfless, caring, compassionate, and unconditionally kind. Like love, it takes practice to understand and feel it. We share love with others through kind acts such as a smile, a nice word, an unexpected deed, or a planned surprise.'
               ]
        ]
    ]);
});
