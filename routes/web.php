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

Route::get('/home',function(){
    return view('home');
});
Route::get('/passing-data',function(){
    $dataList = [
        'nim'=>'10112299',
        'nama'=>'ilman teguh prasetya',
        'alamat'=>'soreang',
        'nilai'=>'C',
        'kata'=>'hello world',
        'harga'=>'400'
    ];
    return view('passing-data',$dataList);
});

Route::get('/belajar-loop-for',function(){
    $dataList = [
        [
            'nim'=>'10112299',
            'nama'=>'ilman teguh prasetya',
            'alamat'=>'soreang',
            'nilai'=>'C',
            'kata'=>'hello world',
            'harga'=>'400'
        ]   
    ];
    $dataLain = [
        'ikan'=>'mujair',
    ];
    return view('belajar-loop-for',['dataList'=>$dataList]);
});