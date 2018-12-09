<?php
/**
 * Created by PhpStorm.
 * User: LiGang
 * Date: 2018/12/7
 * Time: 17:08
 */

namespace App\Http\Controllers\Upload;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller{

    public function upload(Request $request){
        if($request->isMethod('POST')){
            $file=$request->file('source');
            //判断文件是否上传成功
            if($file->isValid()){
                //源文件名
                $originalName=$file->getClientOriginalName();
                //扩展名
                $ext=$file->getClientOriginalExtension();
                //MimeType
                $type=$file->getClientMimeType();
                //临时绝对路径
                $realPath=$file->getRealPath();
                $filename=uniqid().'.'.$ext;
                $bool=Storage::disk('uploads')->put($filename,file_get_contents($realPath));
                //判断是否上传成功
                if($bool){
                    echo 'Success';
                }else {
                    echo 'Fail';
                }
            }
        }
        return view('upload');
    }
}
?>