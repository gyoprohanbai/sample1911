<?php

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



//Helloにアクセスした場合のルート処理の実行（Viewは利用しない）
Route::get('hello',function(){
	return '<html><body><h1>Hello,World</h1></body></html>';
});


$html = <<< EOF

<html>
<head>
<title>Hello</title>
<style>
body { font-size:16pt; color:#999 }
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40pt 0pt -50pt 0pt; }
</style>
</head>
<body>
	<h1>hello</h1>
	<p>This is sample page.</p>
	<p>これはサンプルで作ったページです</p>
</body>
</html>
EOF;

Route::get('hello2',function () use ($html) {
	return $html;
});

Route::get('hello3/{msg?}',function ($msg="NO MESSAGE") {

	$html2 = <<<EOF

<html>
<head>
<title>Hello</title>
<style>
body { font-size:16pt; color:#999 }
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40pt 0pt -50pt 0pt; }
</style>
</head>
<body>
	<h1>hello</h1>
	<p>This is sample page.</p>
	<p>{$msg}</p>
	<p>これはサンプルで作ったページです</p>
</body>
</html>

EOF;


	return ($html2);
});


Route::get('hello4/{id}/{ps}',function ($id,$ps){

	$html2 = <<<EOF

<html>
<head>
<title>Hello</title>
<style>
body { font-size:16pt; color:#999 }
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40pt 0pt -50pt 0pt; }
</style>
</head>
<body>
	<h1>hello</h1>
	<p>This is sample page.</p>
	<p>{$id} + {$ps}</p>
	<p>これはサンプルで作ったページです</p>
</body>
</html>

EOF;

	return ($html2);

});



Route::get('HCT','HelloController@index');



Route::get('/timeline', 'Auth\TimelineController@showTimelinePage');   // <--- 追加
Route::post('/timeline', 'Auth\TimelineController@postTweet');    // <--- 追加


Route::get('login','HomeController@index');
Route::post('login','HomeController@login');
