<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/9
 * Time: 16:46
 */

namespace App\Http\Controllers\Other; //命名空间切记： 必须指定目录下
use App\Http\Controllers\Controller;

class WelcomeController extends Controller{

    public function index(){

        return view('test');
    }
}
?>