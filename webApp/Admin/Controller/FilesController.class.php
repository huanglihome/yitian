<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/12/14
 * Time: 17:49
 */
namespace Admin\Controller;
use Think\Controller;
class FilesController extends CommonController{
    public function indexAction(){
        $want = array("author" => "author", "type" => "type");
        $other = array("status");
        $data = getdata(I("post.", "", "htmlspecialchars"), $want, $other);
        $page = $_REQUEST["p"] ? $_REQUEST["p"] : 1;
        $pageSize = 8;
        $result = D('Files') -> getList($data,$page,$pageSize);
        $count = D('Files') -> getAllCount($data);
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page = setPage($Page);
        $Page->lastSuffix = false;
        $show = bootstrap_page_style($Page->show());
        $typelist = D('Files') -> getType();
        if(!empty($data["type"])){
            $this -> assign("type",$data["type"]);
        }
        $this -> assign("typelist",$typelist);
        $this -> assign("page",$show);
        $this -> assign("FilesList",$result);
        $this -> display();
}
}