<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/3
 * Time: 11:06
 */

namespace app\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Logic\NewsLogic;

class NewsController extends Controller {

    protected  $logic;
    //构造函数
    public function __construct()
    {
        //实例化逻辑层logic类
        $this->logic=new NewsLogic();
    }


    /**
     *  GET 获取所有新闻
     * */

    public function GetNewsList(Request $request){
//        try{
            $result=$this->logic->GetNewsList($request);
            return $this->Success($result);
//        }
//        catch (\Exception $e){
            return $this->Fail(400113);
//        }
    }

    /**
     *  POST 新增新闻
     * */
    public function  InsertNews(Request $request){
        try{
            $result=$this->logic->InsertNews($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     *  POST  修改新闻
     * */
    public function UpdateNews(Request $request){
        try{
            $result=$this->logic->UpdateNews($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     *   POST  删除新闻
     * */
    public function DeleteNews(Request $request){
        try{
            $result=$this->logic->DeleteNews($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }


}


?>