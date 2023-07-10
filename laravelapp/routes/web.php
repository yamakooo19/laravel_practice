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

//上記の解説
//Route::get(アクセス,関数など);
//第一引数には割り当てるアドレスを渡す。
//第二引数にはそれによって呼び出される処理を用意する。これは関数の時もあれば、「コントローラ」が呼び出されることもある。

//view(テンプレート名)
//view関数を使用して引数にテンプレートを指定すると、viewsフォルダのテンプレートファイルがレンダリングされて返されて、ブラウザに表示される仕組みになっている。
//viewsフォルダ・・・resources/views

Route::get('hello', function () {
    return '<html><body><h1>Hello</h1><p>This is sample page</p></body></html>';
});

//returnで、HTMLのソースコードを直接返すことで、そのソースコードをそのままWebブラウザへ返す。
