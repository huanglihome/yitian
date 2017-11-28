<?php
namespace Common\Model;
use Think\Model;
class RuleModel extends BaseModel{
	/*
	*author : lihome
	*2017 -7 -04
	*����״̬Ϊ1��rule
	*/
	public function getRuleList(){
		return M('Rule')->where(array("status"=>1))->select();
	}

    /*
    * Created by PhpStorm.
    * User: jiahua
    * Date: 2017/7/13
    * Time: 10:11
    * add rule
    * */
	public function addRule($data = array()){
	    if(empty($data)){
	        return 0;
        }
        $result = $this->selectRule(array("rule_name" => $data["rule_name"]));
	    if(empty($result) || !$result){
            M("Rule") -> create($data);
            return M("Rule") ->add();
	    }else{
	        return -1;
        }
    }


    /*
    * Created by PhpStorm.
    * User: jiahua
    * Date: 2017/7/16
    * Time: 10:11
    * delete rule
    * */
    public function deleteRule($data = array()){
        if(empty($data)){
            return 0;
        }
        $rule = M('Rule');
        $id["rule_id"] = $data["rule_id"];
        $row = $rule -> where($id)->select();
        if($row["status"] == -1){
            $result = M('Rule')->where($id)->delete();
        }else{
            $rule -> status = -1;
            $rule -> update_time = $data["update_time"];
            $result = $rule->where($id)->save();
        }

        return $result;
    }


    /*
    * Created by PhpStorm.
    * User: jiahua
    * Date: 2017/7/16
    * Time: 10:11
    * select rule by id
    * */
    public function selectRule($data = array()){
        if(empty($data)){
            return 0;
        }
        return M('Rule')->where($data)->find();
    }


    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/16
     * Time: 10:11
     * change rule by id
     *
     */
    public function changeRule($data){
        if(empty($data)||!is_numeric($data["rule_id"])){
            return 0;
        }
        $change = array("rule_descript","rule_name","update_time");
        return M('Rule')->where(array("rule_id" => $data["rule_id"]))->  field($change)->filter('strip_tags') ->save($data);
    }
}