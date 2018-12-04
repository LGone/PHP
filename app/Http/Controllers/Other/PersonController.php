<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/4
 * Time: 14:46
 */

namespace App\Http\Controllers\Other;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Logic\PersonLogic;

class PersonController extends Controller{

    protected $logic;
    //构造函数
    public function __construct()
    {
        $this->logic=new PersonLogic();
    }

    /**
     *  GET 获得所有人员
     * */

    public function GetPersonList(Request $request){

        try {

            $result = $this->logic->GetPersonList($request);
            return $this->logic->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     *  POST 新增人员
     * */
    public function InsertPerson(Request $request){
        try{
            $result=$this->logic->InsertPerson($request);
            return $this->logic->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     *  POST 修改人员
     * */
    public function UpdatePerson(Request $request){
        try{
            $result=$this->logic->UpdatePerson($request);
            return $this->logic->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

    /**
     *  post 删除人员
     * */
    public function DeletePerson(Request $request){
        try{
            $result=$this->logic->DeletePerson($request);
            return $this->logic->Success($result);
        }
        catch (\Exception $e){
            return $this->Fail(400113);
        }
    }

}

?>