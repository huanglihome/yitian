<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/8/8
 * Time: 23:28
 */
namespace Admin\Controller;
use Think\Controller;
class SiteController extends CommonController{
    //站点设置
    public function setsiteAction(){
        if(IS_POST){
            $need = array("sitename" => "站点名不能为空","copyright" => "版权不能为空", "developer" => "开发人员不能为空","developeremail" => "开发人员联系方式不能为空","version" => "版本不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
               // dump($_POST);
              //  C("WEB_VERSION", "0.0.3");
                F("WEB_NAME", I("sitename"));
                F("WEB_COPYRIGHT", I("copyright"));
                F("WEB_AUTHOR", I("developer"));
                F("AUTHOR_EMAIL", I("developeremail"));
                F("WEB_VERSION", I("version"));
                F("RELEASE_TIME", date("Y-m-d H:i:s"));
                $this->success("修改成功");
            }
        }else{
            $this -> display();
        }
    }
}