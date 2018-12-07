<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/7
 * Time: 9:28
 */


namespace App\Http\Controllers\Athlete;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Logic\AthleteLogic;

class AthleteController extends  Controller{
    public $logic;

    //构造函数
    public function __construct()
    {
        $this->logic=new AthleteLogic();
    }

    /**
     *  GET  获取运动员所有数据
* */
    public function AthleteList(Request $request){
        try{
            $result=$this->logic->AthleteList($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     *  GET  自定义分页 获取运动员数据
     * */
    public function AthleteListPage(Request $request){
        try{
            $result=$this->logic->AthleteListPage($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     *  GET  模糊查询 获取运动员数据
     * */
    public function AthleteListSel(Request $request){
        try{
            $result=$this->logic->AthleteListSel($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }


    /**
     *  POST 新增运动员 InsertAthlete
     * */
    public function InsertAthlete(Request $request){
//        try{
            $result=$this->logic->InsertAthlete($request);
            return $this->Success($result);
//        }
//        catch (\Exception $e){
            return $this->Fail(400113);
//        }

    }

    /**
     *  POST 修改运动员  UpdateAthlete
     * */
    public function UpdateAthlete(Request $request){
        try{
            $result=$this->logic->UpdateAthlete($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     *  POST 删除运动员  DeleteAthlete
     * */
    public function DeleteAthlete(Request $request){
        try{
            $result=$this->logic->DeleteAthlete($request);
            return $this->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }
}

?>