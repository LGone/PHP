<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/3
 * Time: 11:07
 */

namespace app\Http\Logic;

use App\Http\Model\News;
use App\Http\Logic\BaseLogic;

class NewsLogic extends BaseLogic{

    protected  $news_model;

    public function __construct()
    {
        $this->news_model=new News();
    }

    /**
     * 返回拼装好的
     * */

    public function GetNewsList($request){
        $result=$this->news_model
             ->orderBy('id','content')
             ->get();
        return $result;
    }


    /**
     * 新增新闻
     * */
    public function InsertNews($request){
        $insert_array['title']=$request->title;
        $insert_array['keywords']=$request->keywords;
        $insert_array['autor']=$request->autor;
        $insert_array['addtime']=$request->addtime;
        $insert_array['content']=$request->content;

        $result=$this->news_model::create($insert_array);
        return $result;
    }

    /**
     *  修改新闻
     * */

    public function UpdateNews($request){
        $update_array['title']=$request->title;
        $update_array['keywords']=$request->keywords;
        $update_array['autor']=$request->autor;
        $update_array['addtime']=$request->addtime;
        $update_array['content']=$request->content;

        $result=$this->news_model::where('id','=',$request->id)->update($update_array);
        return $result;
    }

    /**
     *  删除新闻
     * */

    public function DeleteNews($request){

        $result=$this->news_model::where('id','=',$request->id)->delete();

        return $result;
    }

}
?>