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

// Route::get('hello', function () {
//     return '<html><body><h1>Hello</h1><p>This is sample page</p></body></html>';
// });

//returnで、HTMLのソースコードを直接返すことで、そのソースコードをそのままWebブラウザへ返す。

// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body { font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color:#eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>This is sample page.</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

// Route::get('hello', function () use ($html) {
//     return $html;
// });

//Route::getの働きとして、「HTMLコードをreturnする関数を用意すればそのままWebページが表示される」という仕組みを理解する。
//実際に本格的なWebページを作る場合は別の方法で実装する。

// Route::get('/hello/{msg?}', function ($msg = 'no message.') {

//     $html = <<<EOF
//     <html>
//     <head>
//     <title>Hello</title>
//     <style>
//     body { font-size:16pt; color:#999; }
//     h1 { font-size:100pt; text-align:right; color:#eee;
//         margin:-40px 0px -50px 0px; }
//     </style>
//     </head>
//     <body>
//         <h1>Hello</h1>
//         <p>{$msg}</p>
//         <p>これは、サンプルで作ったページです。</p>
//     </body>
//     </html>
//     EOF;

//     return $html;
// });


// Route::get('hello/{id?}/{pass?}', 'App\Http\Controllers\HelloController@index');

Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::get('hello/other', 'App\Http\Controllers\HelloController@other');
