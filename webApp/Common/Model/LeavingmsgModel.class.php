<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/11/6
 * Time: 11:52
 */
namespace Common\Model;
use Think\Model;
class LeavingmsgModel extends BaseModel{
//    public $_validata = array(
//        array("name","require","名字不能为空",1,'',1),
//        array("email","email","邮箱格式错误",1,'',1),
//        array("ip","require","ip不能为空",1,'',1),
//        array("title","require","标题不能为空",1,'',1),
//        array("content","require","内容不能为空",1,'',1),
//        array("answer","require","回复不能为空",1,'',2),
//    );
//    public $_auto = array(
//        array("create_time","time",self::MODEL_INSERT),
//        array("answer_time","time",self::MODEL_UPDATE),
//    );
    public function addLeavingmsg($data = array()){
        if(empty($data)){
            return 0;
        }
        M("Leavingmsg") -> create($data);
        return M("Leavingmsg") ->add();
    }

    public function answerLeaving($data = array()){
        if(!is_numeric($data["id"])){
            return 0;
        }
        $row = $this -> findItem(array("id" => $data["id"]));
        if(!$row) {
            return -1;
        }else{
            $change = array("answer", "answer_time","status");
            $result = M('Leavingmsg')->where(array("id" => $data["id"]))->field($change)->filter('strip_tags')->save($data);
            if ($result > 0) {
                return $row;
            } else {
                return false;
            }
        }
    }
    public function resetStatus($data = array()){
        $Model = M($this ->getModelName());
        $result = $Model ->where($data) ->find();
        if(!empty($result)){
            if($result['status'] < 0){
                if($result["answer"] == null){
                    $Model->status = 0;
                }else {
                    $Model->status = 1;
                }
                $Model -> update_time = date("Y-m-d H:i:s");
                return $Model -> where($data) -> save();
            }else{
                return throw_exception("不需要还原") ;
            }
        }else {
            throw_exception("非法查询条件");
        }
    }
}
