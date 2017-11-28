<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/8/12
 * Time: 22:45
 */
namespace Admin\Controller;
use Think\Controller;
class PositionContentController extends CommonController{
    //将文章推送至某推荐位
    public function pushAction()
    {
        if(IS_POST){
            $need = array("positionid" => "缺少推荐位ID","newsid" => "缺少文章ID");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("positionid" => "position_id", "newsid" => "news_id");
                $other = array("status", "create_time","update_time");
                $data = getdata(I("post.", "", "htmlspecialchars"), $want, $other);
            }
                $row = D('News') -> findByIdlist(array("news_id" => $data["news_id"]));
                if(!$row){
                    $this->ajaxReturn(getJson("400","非法文章","",""),JSON);
                }else{
                    foreach($row as $new){
                        if(!is_numeric($data["position_id"])){
                            $this->ajaxReturn(getJson("400","非法推荐位ID","",""),JSON);
                        }
                    $position = array(
                        "position_id" => $data["position_id"],
                        "title" => $new["title"],
                        "thumb" => $new["thumb"],
                        "news_id" => $new["news_id"],
                        "status" => $data["status"],
                        "create_time" => $data["create_time"],
                        "update_time" => $data["update_time"]
                    );
                    try{
                        $result = D('PositionContent')->add($position);
                        if ($result == 0) {
                            $this->ajaxReturn(getJson("400","推送推荐位失败", $position,""),JSON);
                        }
                    }catch (Exception $e){
                        $this->ajaxReturn(getJson("400","推送推荐位失败",$e->getMessage(),""),JSON);
                    }
                }
                    $this->ajaxReturn(getJson("200","推送推荐位成功","",""),JSON);
            }
        }
    }

    //展示推荐位内容
    public function indexAction(){
        if($_GET["status"] == -1){
            $data["status"] =-1;
        }else {
            $want = array("positionid" => "position_id", "title" => "title");
            $other = array("status");
            $data = getdata(I("post.", "", "htmlspecialchars"), $want, $other);
        }
        $page = $_REQUEST["p"] ? $_REQUEST["p"] : 1;
        $pageSize = 5;
        $result = D('PositionContent') -> getList($data,$page,$pageSize);
        $count = D('PositionContent') -> getAllCount($data);
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page = setPage($Page);
        $Page->lastSuffix = false;
        $show = bootstrap_page_style($Page->show());
        $positionlist = D('Position')->getList();
        $this -> assign("positionlist",$positionlist);
        $this -> assign("page",$show);
        $this -> assign("positioncontentlist",$result);
        $this -> display();
    }

    //添加推荐位内容
    public function addAction(){
        if(IS_POST){
            $need = array("positionid" => "缺少推荐位ID","TITLE" => "缺少标题");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("positionid" => "position_id", "newsid" => "news_id","TITLE" => "title","THUMB" => "thumb","URL" => "url");
                $other = array("status", "create_time","update_time");
                $data = getdata(I("post.", "", "htmlspecialchars"), $want, $other);
            }
            try{
                $result = D('PositionContent')->add($data);
                if ($result > 0) {
                    $this->success("添加推荐位内容成功","index");
                }else{
                    $this->error("添加推荐位内容失败");
                }
            }catch (Exception $e){
                $this->error("添加推荐位内容失败".$e->getMessage());
            }
        }else{
            $positionlist = D('Position')->getList();
            $this -> assign("positionlist",$positionlist);
            $this -> display();
        }
    }

    //删除推荐位
    public function deleteAction(){
        $need = array("positioncontentid" => "推荐位内容ID不能为空");
        $row = hasRequired($_GET, $need);
        if ($row !== true) {
            $this->error($row);
        } else {
            $want = array("positioncontentid" => "id");
            $other = "";
            $data = getdata(I("get.","","htmlspecialchars"),$want,$other);
            //$data["news_id"] = I("newsid");
        }

        try{
            $result = D('PositionContent')->deleteItem($data);
        }catch (Exception $e){
            $this->error("删除推荐位内容失败".$e->getMessage());
        }
        $this->success("删除推荐位内容成功");
    }

    //还原被删除的推荐位
    public function rPCStatusAction()
    {
        if (IS_GET) {
            $need = array("positioncontentid" => "推荐位内容ID不能为空");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("positioncontentid" => "id");
                $other = "";
                $data = getdata(I("get.","","htmlspecialchars"),$want,$other);
                //$data["news_id"] = I("newsid");
            }
            try {
                $result = D('PositionContent')->resetStatus($data);
                // $row = D('PositionContent')->deleteItem($data);
            } catch (Exception $e) {
                $this->error("还原推荐位内容失败" . $e->getMessage());
            }
            $this->success("还原推荐位内容成功");
        }
    }

    //修改推荐位内容
    public function changeAction(){
        if (IS_POST) {
            $need = array("positionid" => "缺少推荐位ID","TITLE" => "缺少标题","positioncontentid" => "缺少推荐位内容ID");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("positioncontentid" => "id","positionid" => "position_id", "newsid" => "news_id","TITLE" => "title","THUMB" => "thumb","URL" => "url");
                $other = array("update_time");
                $data = getdata(I("post.", "", "htmlspecialchars"), $want, $other);
            }
            try{
                $result = D('PositionContent')->chang($data);
                if ($result > 0) {
                    $this->success("修改推荐位内容成功");
                } else if ($result == 0) {
                    $this->error("修改推荐位内容失败");
                }
            }catch (Exception $e){
                echo $e->getMessage();
            }
        }else{
            $result = D('PositionContent')->find(array("id" => $_GET['id']));
            if($result){
                $positionlist = D('Position')->getList();
                $this -> assign("positionlist",$positionlist);
            $this -> assign("content",$result);
            $this -> display();
            }else{
                $this->error("修改推荐位内容不存在");
            }
        }
    }
}