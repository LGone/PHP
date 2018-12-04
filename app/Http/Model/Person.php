<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/4
 * Time: 14:48
 */

namespace app\Http\Model;
use Illuminate\Database\Eloquent\Model;

class Person extends Model{

    //指定数据库
    protected $connection='mysql';
    //制定表
    protected $table='userinfo';
    //使用create方法新增时，必须添加允许批量赋值的字段
    protected $fillable=['uname','upwd','uage','usex','uphone','uaddress'];
    //laravel会默认维护created_at,updated_at 两个字段，这两个字段都是存储时间戳，整型11位的，
    //因此使用时需要在数据库添加这两个字段。如果不需要这个功能，
    //只需要在模型里加一个属性：public $timestamps=false; 以及一个方法，可以将当前时间戳存到数据库

    public $timestamps=false;

}
?>