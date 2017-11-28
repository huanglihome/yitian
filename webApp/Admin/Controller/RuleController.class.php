<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/7/13
 * Time: 10:11
 */
namespace Admin\Controller;
use Think\Controller;
class RuleController extends CommonController
{
    /*
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/13
     * Time: 10:11
     * add rule
     * */
    public function addRuleAction()
    {
        if (IS_POST) {
            $need = array("rulename" => "权限名不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("rulename" => "rule_name","ruledescript" => "rule_descript");
                $other = array("status","create_time");
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
            }
            $result = D('Rule')->addRule($data);
            if ($result > 0) {
                $this->success("添加权限成功");
            } else if($result == -1){
                $this->error("权限已存在");
            }else{
                $this->error("添加权限失败");
            }
        }
    }


    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/16
     * Time: 10:11
     * delete rule
     *
     */
    public function deleteRuleAction()
    {
        if (IS_GET) {
            $need = array("ruleid" => "权限ID不能为空");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("ruleid" => "rule_id");
                $other = array("update_time");
                $data = getdata(I("get.","","htmlspecialchars"),$want,$other);
            }

            $result = D('Rule')->deleteRule($data);
            if ($result > 0) {
                $this->success("删除成功");
            } else {
                $this->error("删除失败");
            }
        }
    }


    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/16
     * Time: 10:11
     * select rule by id
     *
     */
    public function selectRuleAction()
    {
        if (IS_POST) {
            $need = array("ruleid" => "权限ID不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("ruleid" => "rule_id");
                $other = "";
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
            }
            $result = D('Rule')->selectRule($data);
            if (!empty($result)) {
                //$this -> success("删除成功");
                $this->assign("ruleinfo", $result);
            } else {
                $this->error("查询失败");
            }
        }
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/16
     * Time: 10:11
     * change rule by id
     *
     */
    public function changeRuleAction()
    {
        if (IS_POST) {
            $need = array("ruleid" => "权限ID不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("ruleid" => "rule_id","ruledescript" => "rule_descript","rulename"=>"rule_name");
                $other = array("update_time");
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
            }

            $result = D('Rule')->changeRule($data);
            if ($result > 0) {
                $this->success("修改成功");
            } else if($result == -1){
                $this->error("权限已存在");
            }else{
                $this->error("修改失败");
            }
        }
    }


    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/21
     * Time: 10:11
     *  rule showdetailpage
     *
     */
    public function changeRulePageAction()
    {
        if (IS_GET) {
            $need = array("ruleid" => "权限ID不能为空");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("ruleid" => "rule_id");
                $other = "";
                $data = getdata(I("get.","","htmlspecialchars"),$want,$other);
            }
            $result = D('Rule')->selectRule($data);
            $this->assign("ruleinfo", $result);
            $this->display();
        }
    }
}
