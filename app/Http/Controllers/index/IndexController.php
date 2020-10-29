<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    # 首页方法
    public function index()
    {
        $title = "商城首页";

        return view('index/index',[
            'title' => $title
        ]);
    }
}
