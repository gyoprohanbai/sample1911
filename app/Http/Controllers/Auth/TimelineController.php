<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimelineController extends Controller
{
    //
    public function showTimelinePage()
    {
        return view('auth.timeline'); // resource/views/auth/timeline.blade.php��\������
    }

    public function postTweet(Request $request) //�����͂��ƂŎ������܂��B(Request��post���N�G�X�g���擾���邽�߂̂��̂ł��B)
    {

    }
}
