<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/7/23
 * Time: 14:44
 */
namespace Admin\Controller;
use Think\Controller;
class MenuController extends CommonController{

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/23
     * Time: 14:46
     * descript: show menulist
     *
     */
    public function indexAction(){
        if($_GET["status"] == -1){
            $data["status"] = -1;
        }else {
            $data["status"] = 1;
        }
        $page = $_REQUEST["p"] ? $_REQUEST["p"] : 1;
        $pageSize = 5;
        $result = D('Menu') -> getList($data,$page,$pageSize);
        $count = D('Menu') -> getAllCount($data);
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page = setPage($Page);
        $Page->lastSuffix = false;
        $show = bootstrap_page_style($Page->show());
        $this -> assign("page",$show);
        $this -> assign("menulist",$result);
        $this -> display();
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/23
     * Time: 14:46
     * descript: add menu
     *
     */
    public function addMenuAction(){
        if(IS_POST){
            $need = array("menuname" => "缺少菜单名");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("menuname" => "menu_name","menudescript" => "menu_descript");
                $other = array("status","create_time");
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
        }
            $result = D('Menu') -> addMenu($data);
            if ($result > 0) {
                $this->success("添加菜单成功");
            } else if($result == 0){
                $this->error("添加菜单失败");
            }else{
                $this->error("菜单已存在");
            }
        }
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/23
     * Time: 15:38
     * descript: change menu
     *
     */
    public function changMenuAction(){
        if(IS_POST){
            $need = array("menuid" => "缺少菜单ID");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("menuid" => "menu_id","menuname" => "menu_name","menudescript" => "menu_descript");
                $other = array("update_time");
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
            }

            $result = D('Menu') -> changMenu($data);
            if ($result > 0) {
                $this->success("修改菜单成功");
            }else{
                $this->error("修改菜单失败");
            }
        }
    }


    /**
     * Created by PhpStorm.de
     * User: jiahua
     * Date: 2017/7/23
     * Time: 15:43
     * descript: delete menu
     *
     */
    public function deleteMenuAction(){
        if(IS_GET) {
            $need = array("menuid" => "缺少菜单ID");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("menuid" => "menu_id");
                $data = getdata(I("get.", "", "htmlspecialchars"), $want, "");
                //$menuid["menu_id"] = I("menuid");
            }
            try {
                $result = D('Menu')->deleteItem($data);
                //删除菜单同时删除菜单下的文章
              //  $row = D("News") -> deleteChild($data);
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
            $this->success("删除菜单成功");
        }
    }

    //还原被删除的菜单
    public function resetMenuStatusAction(){
        if(IS_GET) {
            $need = array("menuid" => "缺少菜单ID");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("menuid" => "menu_id");
                $data = getdata(I("get.", "", "htmlspecialchars"), $want, "");
                //$menuid["menu_id"] = I("menuid");
            }
            try {
                $result = D('Menu')->resetStatus($data);
                //删除菜单同时删除菜单下的文章
              //  $row = D("News")->resetStatus($data);
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
            $this->success("还原菜单成功");
        }
    }
}