<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/7
 * Time: 9:29
 */

namespace App\Http\Logic;
use App\Http\Model\Athlete;
use App\Http\Logic\BaseLogic;

class AthleteLogic extends BaseLogic{
    public $athlete_model;

    public function __construct()
    {
        $this->athlete_model=new Athlete();
    }

    /**
     * 获取运动员所有数据
     * */

    public function AthleteList($request){
        $result=$this->athlete_model
            ->orderBy('F_ID','F_Name')
            ->get();
        return $result;
    }

    /**
     *  自定义分页 获取运动员数据
     * */
    public function AthleteListPage($request){
        $result=$this->athlete_model
            ->orderBy('F_ID','F_Name')
            ->paginate(5);
        return $result;

    }

    /**
     *  模糊查询 获取运动员数据
     * */
    public function AthleteListSel($request){
        $result=$this->athlete_model
            ->orderBy('F_ID','F_Name')
            ->where('F_Name','like','%'.$request['F_Name'].'%')
            ->where('F_Address','like','%'.$request['F_Address'].'%')
            ->get();
        return $result;
    }



    /**
     *  新增运动员 InsertAthlete
     * */
    public function InsertAthlete($request){
        $insert_array['F_Name']=$request->F_Name;
        $insert_array['F_Gender']=$request->F_Gender;
        $insert_array['F_BodyCode']=$request->F_BodyCode;
        $insert_array['F_Birthday']=$request->F_Birthday;
        $insert_array['F_NationID']=$request->F_NationID;
        $insert_array['F_SubdivisionID']=$request->F_SubdivisionID;
        $insert_array['F_EventID']=$request->F_EventID;
        $insert_array['F_LevelID']=$request->F_LevelID;
        $insert_array['F_RegCode']=$request->F_RegCode;
        $insert_array['F_EffectiveDate']=$request->	F_EffectiveDate;
        $insert_array['F_Issuingauthority']=$request->F_Issuingauthority;
        $insert_array['F_Address']=$request->F_Address;
        $insert_array['F_Blood']=$request->F_Blood;
        $insert_array['F_UnitCode']=$request->F_UnitCode;
        $insert_array['F_Phone']=$request->F_Phone;
        $insert_array['F_AgeBone']=$request->F_AgeBone;
        $insert_array['F_Address2']=$request->F_Address2;
        $insert_array['F_Photo']=$request->F_Photo;
        $insert_array['F_UnitID']=$request->F_UnitID;
        $insert_array['F_FisrtUnit']=$request->F_FisrtUnit;
        $insert_array['F_TrainingUnit']=$request->F_TrainingUnit;
        $insert_array['F_Remark']=$request->F_Remark;
        $insert_array['F_UserID']=$request->F_UserID;
        $insert_array['F_Date']=$request->F_Date;

        $result=$this->athlete_model::create($insert_array);
        return $result;
    }

    /**
     *   修改运动员 UpdateAthlete
     * */
    public function UpdateAthlete($request){
        $update_array['F_Name']=$request->F_Name;
        $update_array['F_Gender']=$request->F_Gender;
        $update_array['F_BodyCode']=$request->F_BodyCode;
        $update_array['F_Birthday']=$request->F_Birthday;
        $update_array['F_NationID']=$request->F_NationID;
        $update_array['F_SubdivisionID']=$request->F_SubdivisionID;
        $update_array['F_EventID']=$request->F_EventID;
        $update_array['F_LevelID']=$request->F_LevelID;
        $update_array['F_RegCode']=$request->F_RegCode;
        $update_array['F_EffectiveDate']=$request->	F_EffectiveDate;
        $update_array['F_Issuingauthority']=$request->F_Issuingauthority;
        $update_array['F_Address']=$request->F_Address;
        $update_array['F_Blood']=$request->F_Blood;
        $update_array['F_UnitCode']=$request->F_UnitCode;
        $update_array['F_Phone']=$request->F_Phone;
        $update_array['F_AgeBone']=$request->F_AgeBone;
        $update_array['F_Address2']=$request->F_Address2;
        $update_array['F_Photo']=$request->F_Photo;
        $update_array['F_UnitID']=$request->F_UnitID;
        $update_array['F_FisrtUnit']=$request->F_FisrtUnit;
        $update_array['F_TrainingUnit']=$request->F_TrainingUnit;
        $update_array['F_Remark']=$request->F_Remark;
        $update_array['F_UserID']=$request->F_UserID;
        $update_array['F_Date']=$request->F_Date;

        $result=$this->athlete_model::where('F_ID','=',$request->F_ID)->update($update_array);
        return $result;
    }

    /**
     *   删除运动员  DeleteAthlete
     * */
    public function DeleteAthlete($request){
        $result=$this->athlete_model::where('F_ID','=',$request->F_ID)->delete();
        return $result;
    }

}

?>