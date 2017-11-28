<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/8/12
 * Time: 14:23
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

class PositionController extends CommonController
{
    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/8/12
     * Time: 14:46
     * descript: show positionlist
     *
     */
    public function indexAction()
    {
        if($_GET["status"] == -1){
            $data["status"] =-1;
        }else{
        $want = array("name" => "name");
        $other = array("status");
        $data = getdata(I("post.","","htmlspecialchars"),$want,$other);}
        $page = $_REQUEST["p"] ? $_REQUEST["p"] : 1;
        $pageSize = 5;
        $result = D('Position') -> getList($data,$page,$pageSize);
        $count = D('Position') -> getAllCount($data);
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page =setPage($Page);
        $Page->lastSuffix = false;
        $show = bootstrap_page_style($Page->show());
        $this -> assign("page",$show);
        $this -> assign("positionlist",$result);
        $this -> display();
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/8/12
     * Time: 14:46
     * descript: add menu
     *
     */
    public function addAction()
    {
        if (IS_POST) {
            $need = array("positionname" => "缺少推荐位名");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("positionname" => "name", "positiondescript" => "description");
                $other = array("status", "create_time","update_time");
                $data = getdata(I("post.", "", "htmlspecialchars"), $want, $other);
            }
            try{
            $result = D('Position')->add($data);
                if ($result > 0) {
                    $this->success("添加推荐位名成功");
                } else if ($result == 0) {
                    $this->error("添加推荐位名失败");
                }
            }catch (Exception $e){
                echo $e->getMessage();
            }
        }
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/8/12
     * Time: 15:38
     * descript: change menu
     *
     */
    public function changAction()
    {
        if (IS_POST) {
            $need = array("positionid" => "缺少推荐位ID");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("positionid" => "id", "positionname" => "name", "positiondescript" => "description");
                $other = array("update_time");
                $data = getdata(I("post.", "", "htmlspecialchars"), $want, $other);
            }
            try{
                $result = D('Position')->chang($data);
                if ($result > 0) {
                    $this->success("修改推荐位名成功");
                } else if ($result == 0) {
                    $this->error("修改推荐位名失败");
                }
            }catch (Exception $e){
                echo $e->getMessage();
            }
        }
    }


    /**
     * Created by PhpStorm.de
     * User: jiahua
     * Date: 2017/8/12
     * Time: 15:43
     * descript: delete menu
     *
     */
    public function deleteAction()
    {
        if (IS_GET) {
            $need = array("positionid" => "缺少推荐位ID");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("positionid" => "id");
                $other = "";
                $data = getdata(I("get.", "", "htmlspecialchars"), $want, $other);
            }
            try {
                $result = D('Position')->deleteItem($data);
                $row = D('PositionContent')->deleteItem(array("position_id" => $data["id"]));
            } catch (Exception $e) {
                $this->error("删除推荐位名失败" . $e->getMessage());
            }
            $this->success("删除推荐位名成功");
        }
    }

    //还原被删除的推荐位内容
    public function resetPositionStatusAction()
    {
        if (IS_GET) {
            $need = array("positionid" => "缺少推荐位ID");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("positionid" => "id");
                $other = "";
                $data = getdata(I("get.", "", "htmlspecialchars"), $want, $other);
            }
            try {
                $result = D('Position')->resetStatus($data);
               // $row = D('PositionContent')->deleteItem($data);
            } catch (Exception $e) {
                $this->error("还原推荐位失败" . $e->getMessage());
            }

            $this->success("还原推荐位成功");
        }
    }
}