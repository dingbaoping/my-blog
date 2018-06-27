<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\post;

class PostController extends Controller
{
//    文章首页
    public function index()
    {
        return view('post.index');
    }
//    文章详情
    public function show()
    {
        return view('post.show');
    }
//    创建文章
    public function create()
    {
        return view('post.create');
    }
    public function store()
    {
        $parser = new \cebe\markdown\Markdown();
        // echo $parser->parse($markdown);
        return view('post.create');
    }
}
