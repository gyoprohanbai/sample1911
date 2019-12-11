<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    //
	
public function index ( Request $request )
{
	$items = DB::select ('select * from people where id = 2');

	
	$param = [
		'name2' => '工藤',
		'mail2' => 'sample@gyopro',
		'age2' => 42,
	];

	DB::update(' update people set name = :name2,mail = :mail2,age = :age2 where id = 1',$param );



	return $items;
}


}
