<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        //获取id参数
    }

    public function edit(){
        echo '这是文章的修改操作';
        echo '<hr>';
        echo route('aedit');
    }
}
