<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
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
        $this ->setposttionAction();
        $val["status"] = 1;
        $nav = D('Menu')->getList($val);
        $articlebymenunumber = 5;
        $articlebymenu = array();
        foreach($nav as $menu){
            $data = array();
            $data["menu_id"] = $menu["menu_id"];
            $data["content"] = D("News") -> getList($data,1,$articlebymenunumber);
            $articlebymenu[$menu["menu_name"]] = array("id" =>  $menu["menu_id"],"content" => $data["content"]);
        }
       // $result = array("nav" => $nav,"position" => $position,"article" => $articlebymenu);
        $this -> assign("article",$articlebymenu);
       //dump($articlebymenu);
        $this->display();
    }

    public function catAction(){
        $this ->setposttionAction();
        if(IS_GET){
            $need = array("catid" => "菜单ID不能为空");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("catid" => "menu_id");
                $other = "";
                $data = getdata(I("get.","","htmlspecialchars"),$want,$other);
            }
            $menu =  D('Menu')->findItem($data);
            $page = $_REQUEST["p"] ? $_REQUEST["p"] : 1;
            $pageSize = 5;
            $result = D('News') -> getList($data,$page,$pageSize);
            $count = D('News') -> getAllCount($data);
            $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $Page = setPage($Page);
            $Page->lastSuffix = false;
            $show = bootstrap_page_style($Page->show());
            $this -> assign("menu",$menu);
            $this -> assign("page",$show);
            $this -> assign("newslist",$result);
            $this -> display();
           //dump($menu);
        }else{
            $this -> error("非法操作");
        }
    }
    public function detailAction(){
        $this ->setposttionAction();
        if(IS_GET) {
            $need = array("newsid" => "文章ID不能为空");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("newsid" => "news_id");
                $other = "";
                $data = getdata(I("get.", "", "htmlspecialchars"), $want, $other);
            }
            $result = D('News')->findById($data);
            if ($result != 0 && $result) {
                D('News')-> incnewcount($data);
                $result["content"] = htmlspecialchars_decode($result["content"]);
                //dump($result);
                $this->assign("articleinfo", $result);
                $this->display();
            } else {
                $this->error("获取数据失败");
            }
        }else{
            $this -> error("非法操作");
        }
    }
}