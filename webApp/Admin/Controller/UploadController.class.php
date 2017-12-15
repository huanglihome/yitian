<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/7/24
 * Time: 15:03
 */
namespace Admin\Controller;
use Think\Controller;
class UploadController extends CommonController {
    //文件上传
    public function kindUploadAction(){
        $upload = D('Upload');
        $res = $upload -> upload(session("userinfo.realname"));

        if($res === false){
            $this -> ajaxReturn(array("success" => false,"msg" => "上传失败","file_path" => ""),'JSON');
        }else{
           // $this -> ajaxReturn(getJson("200","上传成功",$res,""),'JSON');
            $this -> ajaxReturn(array("success" => true,"msg" => "上传成功","file_path" => "http://localhost/yitian".$res),'JSON');
        }
    }

    //图片上传
    public function UploadimgAction(){
        $upload = D('Upload');
        $res = $upload -> uploadimage(session("userinfo.realname"));

        if($res === false){
            $this -> ajaxReturn(array("success" => false,"msg" => "上传失败","file_path" => ""),'JSON');
        }else{
            // $this -> ajaxReturn(getJson("200","上传成功",$res,""),'JSON');
            $this -> ajaxReturn(array("success" => true,"msg" => "上传成功","file_path" => $res ),'JSON');
        }
    }
    //显示文件列表
    public function getUploadListAction(){

    }

}