<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/7/24
 * Time: 17:43
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

class NewsController extends CommonController {
    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/24
     * Time: 17:43
     * descript: add article
     */
    public function addNewAction(){
        if(IS_POST) {
            //dump($_POST);
            $need = array("menuid" => "请先选择分类","title" => "标题不能为空","content" => "文章内容不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("menuid" => "menu_id","title" => "title","smalltitle" => "small_title","pic" => "thumb","key"=>"keywords","description" => "description","copyform" => "copyform");
                $other = array("status","create_time");
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
                $data["username"] = session("userinfo")["realname"];
                $want = array("content" => "content");
                $other = array("create_time");
                $contentdata = getdata(I("post."),$want,$other);
            }
            $row = D('News')->addNew($data);
            if ($row) {
                $contentdata["news_id"] = $row;
            } else {
                $this->error("添加文章失败");
            }
            $result = D('NewsContent')->addContent($contentdata);
            if($result > 0){
                $this->success("添加文章成功",U("getNewsList"));
            }else{
                $this->error("添加文章失败");
            }
        }else{
            $menulist = D('Menu') -> getList();
            $this -> assign("menulist",$menulist);
            $this -> display();
        }

    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/24
     * Time: 23:52
     * descript: delete article
     */
    public function deleteNewsAction(){
        $need = array("newsid" => "文章ID不能为空");
        $row = hasRequired($_GET, $need);
        if ($row !== true) {
            $this->error($row);
        } else {
            $want = array("newsid" => "news_id");
            $other = "";
            $data = getdata(I("get.","","htmlspecialchars"),$want,$other);
            //$data["news_id"] = I("newsid");
        }
        try {
            $result = D('News')->deleteItem($data);
            $row = D('NewsContent')->deleteItem($data);
        }catch(Exception $e){
            $this->error($e->getMessage());
        }
                $this->success("删除文章成功");

        }



    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/25
     * Time: 00:47
     * descript: change article
     */
    public function changNewAction(){
        $need = array("menuid" => "请先选择分类","title" => "标题不能为空","content" => "文章内容不能为空","newsid" => "文章ID不能为空");
        $row = hasRequired($_POST, $need);
        if ($row !== true) {
            $this->error($row);
        } else {
            $newsid["news_id"] = I("newsid");
            $want = array("menuid" => "menu_id","title" => "title","smalltitle" => "small_title","pic" => "thumb","key"=>"keywords","description" => "description","copyform" => "copyform");
            $other = array("update_time");
            $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
            $data["username"] = session("userinfo")["realname"];
            $want = array("content" => "content");
            $other = array("update_time");
            $contentdata = getdata(I("post."),$want,$other);
        }
        $result = D('News') -> changNew($newsid,$data);
        $row =  D('NewsContent') -> changNew($newsid,$contentdata);
        if($result > 0 || $row > 0){
            $this->success("修改文章成功");
        }else{
            $this->error("修改文章失败");
        }
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/30
     * Time: 10:40
     * descript: show articlechangepage
     */
    public function showChangePageAction(){
        $need = array("newsid" => "文章ID不能为空");
        $row = hasRequired($_GET, $need);
        if ($row !== true) {
            $this->error($row);
        } else {
            $want = array("newsid" => "news_id");
            $other = "";
            $data = getdata(I("get.","","htmlspecialchars"),$want,$other);
        }
        $result = D('News') -> findById($data);
        if($result!=0 && $result) {
         // dump($result);
            $menulist = D('Menu') -> getList();
            $this -> assign("menulist",$menulist);
            $this -> assign("articleinfo",$result);
            $this->display();
        }else{
            $this->error("获取数据失败");
        }
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/25
     * Time: 1:01
     * descript: get articlelist
     */
    public function getNewsListAction(){
        if(I("get.status") == -1) {
            $data["status"] = -1;
        }else{
            $want = array("menuid" => "menu_id", "title" => "title");
            $other = array("status");
            $data = getdata(I("post.", "", "htmlspecialchars"), $want, $other);
        }
        $page = $_REQUEST["p"] ? $_REQUEST["p"] : 1;
        $pageSize = 5;
        $result = D('News') -> getList($data,$page,$pageSize);
        $count = D('News') -> getAllCount($data);
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page = setPage($Page);
        $Page->lastSuffix = false;
        $show = bootstrap_page_style($Page->show());
            $menulist = D('Menu') -> getList();
            $positionlist = D('Position')->getList();
            if(is_numeric($data["menu_id"])){
                $this -> assign("menuid",$data["menu_id"]);
            }
            $this -> assign("positionlist",$positionlist);
            $this -> assign("menulist",$menulist);
            $this -> assign("page",$show);
            $this -> assign("newslist",$result);
            $this -> display();
    }

    //还原被删除的新闻
    public function resetNewsStatusAction(){
        $need = array("newsid" => "文章ID不能为空");
        $row = hasRequired($_GET, $need);
        if ($row !== true) {
            $this->error($row);
        } else {
            $want = array("newsid" => "news_id");
            $other = "";
            $data = getdata(I("get.","","htmlspecialchars"),$want,$other);
            //$data["news_id"] = I("newsid");
        }
        try {
            $result = D('News')->resetStatus($data);
            $row = D('NewsContent')->resetStatus($data);
        }catch(Exception $e){
            $this->error($e->getMessage());
        }
        $this->success("还原文章成功");
    }
}