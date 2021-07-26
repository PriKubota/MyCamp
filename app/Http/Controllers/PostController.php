<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // メニュー項目
    private $posts = [
        'キャンプ道具一覧画面',
        '未定①',
        '未定②'
    ];

    public function index() {

        return view('index')
            ->with(['posts' => $this->posts]);
    }

    public function show($id) {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
