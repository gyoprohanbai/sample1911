<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('login.index');
    }


	public function login(Request $request)
	{

		$data = [
			'id' => $request->id,
			'pw' => $request->pass,
		];

		$items = DB::select ('select * from people where account = :id and password = :pw',$data);

		//print_r ( $items );

		//ログイン認証
		if ( $items == null ){
			return ("ログインに失敗しました");
		}

		print_r ( $items[0] );
		print ( $items[0]->id );

		//return ( $items );
		return view('login.login',['items'=>$items[0]]);
	}
}
