<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/11/5
 * Time: 21:04
 * 留言管理类
 */
namespace Admin\Controller;
use Think\Controller;
class LeavingmsgController extends CommonController {
    //留言列表
    public function indexAction(){
        //回收站get提交status = -1
        if(I("get.status") == -1) {
            $data["status"] = -1;
        }else{
            //否则正常查询
            if(isset($_POST["status"])){
                $data["status"] = intval($_POST["status"]);
            }else{
                $data["status"] = 0;
            }
            if(isset($_POST["title"]) && $_POST["title"] != ""){
                $data["title"] = $_POST["title"];
            }
        }
        //获取页码
        $page = $_REQUEST["p"] ? $_REQUEST["p"] : 1;
        $pageSize = 5;
        $result = D('Leavingmsg') -> getList($data,$page,$pageSize);
        $count = D('Leavingmsg') -> getAllCount($data);
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        //替换分页样式
        $Page = setPage($Page);
        $Page->lastSuffix = false;
        $show = bootstrap_page_style($Page->show());
        $this -> assign("page",$show);
        $this -> assign("status",$data["status"]);
        $this -> assign("Leavinglist",$result);
        $this -> display();
    }

    //回复
    public function reLeavingAction(){
        if(IS_POST){
            $need = array("id" => "缺少留言ID","answer" => "请输入回复内容");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("id" => "id","answer" => "answer");
                $other = array("status");
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
                $data["answer_time"] = date("Y-m-d H:i:s");
            }

            $result = D('Leavingmsg') -> answerLeaving($data);
            if($result === false){
                $this->error("回复失败");
            }else if ($result <= 0) {
                $this->error("回复失败:非法ID".$result);
            }else{
                //回复成功，邮箱通知
                sendmail($result["email"],'回复通知',"您在网站中的留言已经得到回复，请前往网站查看回复");
                $this->success("回复成功");
            }
        }
    }

    //驳回，删除留言
    public function deleteAction(){
        if(IS_GET) {
            $need = array("id" => "缺少留言ID");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("id" => "id");
                $data = getdata(I("get.", "", "htmlspecialchars"), $want, "");
            }
            try {
                $result = D('Leavingmsg')->deleteItem($data);
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
            //驳回理由，发送邮件
            //sendmail($result["email"],'回复通知',"您在网站中的留言已经得到回复，请前往网站查看回复");
            $this->success("删除留言成功");
        }
    }

    //还原被删除的留言
    public function resetStatusAction(){
        if(IS_GET) {
            $need = array("id" => "缺少留言ID");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("id" => "id");
                $data = getdata(I("get.", "", "htmlspecialchars"), $want, "");
            }
            try {
                $result = D('Leavingmsg')->resetStatus($data);
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
            $this->success("还原留言成功");
        }
    }
}