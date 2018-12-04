<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/4
 * Time: 15:03
 */

namespace App\Http\Logic;

use App\Http\Model\Person;
use App\Http\Logic\BaseLogic;

class PersonLogic extends BaseLogic{
    protected $person_model;

    public function __construct()
    {
        $this->person_model=new Person();
    }


    /**
     *  GET 获取所有人员
     * */
    public function GetPersonList($request){
        $result=$this->person_model
            ->orderBy("uid","uage")
            ->get();
        return $result;
    }

    /**
     *   POST 新增人员
     * */
    public function InsertPerson($request){
        $insert_array['uname']=$request->uname;
        $insert_array['upwd']=$request->upwd;
        $insert_array['uage']=$request->uage;
        $insert_array['usex']=$request->usex;
        $insert_array['uphone']=$request->uphone;
        $insert_array['uaddress']=$request->uaddress;

        $result=$this->person_model::create($insert_array);
        return $result;
    }

    /**
     *   POST 修改人员
     * */
    public function UpdatePerson($request){
        $update_array['uname']=$request->uname;
        $update_array['upwd']=$request->upwd;
        $update_array['uage']=$request->uage;
        $update_array['usex']=$request->usex;
        $update_array['uphone']=$request->uphone;
        $update_array['uaddress']=$request->uaddress;

        $result=$this->person_model::where('uid','=',$request->uid)->update($update_array);
        return $result;

    }

    /**
     *  POST  删除人员
     * */
    public function DeletePerson($request){
        $result=$this->person_model::where('uid','=',$request->uid)->delete();
        return $result;
    }
}

?>