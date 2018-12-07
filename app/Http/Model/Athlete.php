<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/7
 * Time: 9:46
 */

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model{

    //指定数据库
    protected $connection='mysql';
    //指定表
    protected $table='syrs_reg_athlete';
    //使用create方法新增时，必须添加允许批量赋值的字段
    protected $fillable=['F_Name','F_Gender','F_BodyCode','F_Birthday','F_NationID','F_SubdivisionID','F_EventID','F_LevelID','F_RegCode','F_EffectiveDate','F_Issuingauthority','F_Address','F_Blood','F_UnitCode','F_Phone','F_AgeBone','F_Address2','F_Photo','F_UnitID','F_FisrtUnit','F_TrainingUnit','F_Remark','F_UserID','F_Date'];
    //laravel会默认维护created_at,updated_at 两个字段，这两个字段都是存储时间戳，整型11位的，
    //因此使用时需要在数据库添加这两个字段。如果不需要这个功能，
    //只需要在模型里加一个属性：public $timestamps=false; 以及一个方法，可以将当前时间戳存到数据库
    public $timestamps=false;
}
?>