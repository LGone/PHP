<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/4
 * Time: 18:33
 */

namespace App\Http\Middleware;

use App\Http\Logic\BaseLogic;
use Illuminate\Support\Facades\Redis;
use Closure;

class PersonCheck extends BaseLogic{
    public function handle($request,Closure $next){
        $iserror=false;
        $token=empty($request->header('token'))?$request->token:$request->header('token');
        if($token=='' or empty($token) or !Redis::exists($token)){
            $iserror=true;
        }else {
            $userjson=Redis::get($token);
            $userarray=json_decode($userjson,true);

            if(empty($userjson) or empty($userarray['business_id'])){
                $iserror=true;
            }else{
                //赋值给$request对象，传给控制器，控制器内取值方法: $request->businessID

                $request->offsetSet('business_id',$userarray['business_id']);
                $request->offsetSet('admin_is_login',$userarray['admin_is_login']);
                $request->offsetSet('business_is_login',$userarray['business_is_login']);
                $request->offsetSet('gym_id',$userarray['gym_id']);
                if($userarray['admin_is_login'] or $userarray['business_is_login']){
                    $request->offsetSet('is_login',true);
                    $request->offsetSet('personnel_id',$userarray['personnel_id']);
                }else {
                    $request->offsetSet('is_login',false);
                    $iserror=true;
                }

                $request->offsetSet('token',$userarray['token']);
            }
    }
        if($iserror){
            return $this->fail('40101');  //错误 返回错误消息
        }
        return $next($request);  //引入到控制器，继续执行
    }
}

?>