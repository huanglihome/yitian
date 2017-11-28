<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/11/5
 * Time: 21:04
 */
namespace Home\Controller;
use Think\Controller;
class LeavingmsgController extends Controller {
    public function setposttionAction(){
        //导航栏数据
        $val["status"] = 1;
        $positionnumb = 5;
        $position = array();
        $positionlist = D("Position") -> getList($val,1,10);
        foreach($positionlist as $vo){
            $data = array();
            $data["position_id"] = $vo["id"];
            $data["status"] = 1;
            $data["content"] = D("PositionContent") -> getList($data,1,$positionnumb);
            $position[$vo["name"]] = array("id" =>  $vo["id"],"content" => $data["content"]);
        }
        // $result = array("nav" => $nav,"position" => $position,"article" => $articlebymenu);
        $this -> assign("position",$position);
    }
    public function indexAction(){
        $this -> setposttionAction();
        $data["status"] = 1;
        if(isset($_POST["title"]) && $_POST["title"] != ""){
            $data["title"] = $_POST["title"];
        }
        $page = $_REQUEST["p"] ? $_REQUEST["p"] : 1;
        $pageSize = 5;
        $result = D('Leavingmsg') -> getList($data,$page,$pageSize);
        $count = D('Leavingmsg') -> getAllCount($data);
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page = setPage($Page);
        $Page->lastSuffix = false;
        $show = bootstrap_page_style($Page->show());
        $this -> assign("page",$show);
        $this -> assign("Leavinglist",$result);
//       dump($result);
        $this -> display();
    }

    public function sendMailAction(){
        $code = rand(1000,9999);
        $email = $_POST["email"];
        session($email,$code);
        $result = sendmail($email,'信箱验证',"您注册的信箱验证码为<span style='color:red'>$code</span>,如果不是您本人操作，请忽略！");
        if($result == "邮件已发送") {
            $this -> ajaxReturn(getJson('200',"邮件已发送，请留意邮箱信息（有可能在垃圾邮件中）"),"JSON");
        }else{
            $this -> ajaxReturn(getJson('400',$result),"JSON");
        }
    }

    //发布留言
    public function LeavingAction(){
        if(IS_POST){
            if(($_POST["code"]!="") && ($_POST["code"] == session($_POST["email"]))){
            $need = array("name" => "名字不能为空","email" => "邮箱格式错误","title" => "标题不能为空","content" => "内容不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this -> ajaxReturn(getJson('400',$row),"JSON");
            } else {
                $want = array("name" => "name","email" => "email","title" => "title","content" => "content");
                $other = array("create_time");
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
                $data["ip"] = $_SERVER["REMOTE_ADDR"];
            }
            $result = D("Leavingmsg") ->addLeavingmsg($data);
            if($result > 0){
                $this -> ajaxReturn(getJson('200',"留言成功，请等待审核回复，我们将会以邮箱的形式通知您，请注意邮箱（有可能在垃圾邮件中）"),"JSON");
            }else{
                $this -> ajaxReturn(getJson('400',"留言失败",$result),"JSON");
            }}else{
                $this -> ajaxReturn(getJson('400',"验证码错误"),"JSON");
            }
        }else{
            $this -> ajaxReturn(getJson('400',"非法操作"),"JSON");
        }
    }
}