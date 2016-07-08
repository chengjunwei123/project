<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //通过反射移植获取当前的参数
   public function index($id)
   {
    echo '当前的id值为'.$id;
   }

   public function setting()
   {
    echo '这是H后台的设置';
   }
}
