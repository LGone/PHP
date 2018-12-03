<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/3
 * Time: 9:37
 */

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AreaController extends Controller {

    protected $logic;
    //构造函数
    public function __construct()
    {
        //实例化逻辑层logic 类
        $this->logic=new AreaLogic();
    }

    /**
     *
     * 返回拼装好的行政区域数组
     *
     * */

    public function GetAreaList(Request $request){
        try{
            $result=$this->logic->GetAreaList($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     *
     * 修改行政区域
     *
     * */

    public function UpdateArea(Request $request){
        try{
            $result=$this->logic->UpdateArea($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     * 新增行政区域
     * */

    public function InsertArea(Request $request){
        try{
            $result=$this->logic->InsertArea($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     * 删除行政区域
     * */
    public function DeleteArea(Request $request){
    try{
        $result = $this->logic->DeleteArea($request);
        return $this->Success($result);
    }
    catch (\Exception $e){
        return $this->Fail(400113);

        }
    }
}

?>