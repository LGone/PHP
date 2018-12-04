<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/3
 * Time: 22:39
 */


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis; //引入Redis 库

class RedisController extends Controller{

    public function TestRedis(){
        Redis::set('myname','LiGang');
        $myname=Redis::get('myname');

        if(Redis::exists('myage')){
            Redis::get('myage');
        }else{
            Redis::set('myage',23);
        }
        $myage=Redis::get('myage');

        $array=array("myname"=>$myname,"myage"=>$myage);
        return $this->Success($array);
    }
}
?>