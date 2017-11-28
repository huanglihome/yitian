<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/10/31
 * Time: 11:15
 */
namespace Common\Model;
use Think\Model;
class BaseModel extends Model{
    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/10/31
     * Time: 11:15
     * get list all count
     */
    public function getAllCount($data = array()){
        if(isset($data["title"])){
            $data["title"] = array("like","%".$data["title"]."%");
        }
        if(isset($data["name"])){
            $data["name"] = array("like","%".$data["name"]."%");
        }
        $Model = $this ->getModelName();
        return M($Model) -> where($data) -> count();
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/10/31
     * Time: 22:40
     * get list
     */
    public function getList($data = array(),$page = 1,$pageSize = 100){
        if(isset($data["title"])){
            $data["title"] = array("like","%".$data["title"]."%");
        }
        $offsize = ($page - 1) * $pageSize;
        return M($this ->getModelName()) -> where($data) -> limit($offsize,$pageSize) -> select();
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/10/31
     * Time: 22:40
     * detele
     */

    public function deleteItem($data = array()){
        $Model = M($this ->getModelName());
        $result = $Model ->where($data) ->find();
        if(!empty($result)){
            if($result['status'] >= 0){
                $Model -> status = -1;
                $Model -> update_time = date("Y-m-d H:i:s");
                return $Model -> where($data) -> save();
            }else{
                return $Model -> where($data) -> delete();
            }
        }else{
            throw_exception("非法查询条件") ;
        }
    }

    public function resetStatus($data = array()){
        $Model = M($this ->getModelName());
        $result = $Model ->where($data) ->find();
        if(!empty($result)){
            if($result['status'] < 0){
                $Model -> status = 1;
                $Model -> update_time = date("Y-m-d H:i:s");
                return $Model -> where($data) -> save();
            }else{
                return throw_exception("不需要还原") ;
            }
        }else {
            throw_exception("非法查询条件");
        }
    }

    public function findItem($data){
        return M($this ->getModelName()) -> where($data) -> find();
    }
}