<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/3
 * Time: 10:00
 */

namespace app\Http\Logic;

use app\Http\Model\Area;

class AreaLogic extends BaseLogic{
    protected $area_model;

    public function __construct()
    {
        $this->area_model=new Area();
    }


    /**
     *
     * 返回拼装好的行政区域数组
     * return array
     * */
    public function GetAreaList($request){
        //如果没有传入pid,默认取一级行政区域

        if(is_null($request->pid)){
            $request->pid=0;
        }
        $result=$this->area_model::where('area_pid',$request->pid)
               ->orderBy('id','desc')
               ->get();
        return $result;
    }


    /**
     * 修改行政区域
     *
     * */
    public function UpdateArea($request){
        if(is_null($request->area_id) or !is_numeric($request->area_id)){
            return $this->fail(400112);
        }
        //如果没有传pid,默认一级行政区域
        if(is_null($request->area_pid)){
            $request->area_pid=0;
        }

        $update_array['area_pid']=$request->area_pid;
        $update_array['area_name']=$request->area_name;
        $request=$this->area_model::where("id",'=',$request->area_id)->update($update_array);
        return $request;

    }

    /**
     * 新增行政区域
     *
     * */

    public function InsertArea($request){
        //如果没有传pid,默认一级行政区域
        if(is_null($request->area_pid)){
            $request->area_pid=0;
        }
        $insert_array['area_id']=$request->area_id;
        $insert_array['area_pid']=$request->area_pid;
        $insert_array['area_name']=$request->area_name;

        $request=$this->area_model::create($insert_array);
        return $request;
    }

    public function DeleteArea($request){
        //area_id为空或者不为数字，直接返回错误
        if(is_null($request->area_id) or !is_numeric($request->area_id)){
            return $this->fail(400112);
        }
        $result=$this->area_model->where('area_id','=',$request->area_id)->delete();

        return $result;
    }

}

?>