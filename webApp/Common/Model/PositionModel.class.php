<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/8/12
 * Time: 14:29
 */
namespace Common\Model;
use Think\Model;
class PositionModel extends BaseModel{

    public function find($data){
        return M('Position') -> where($data) -> find();
    }
    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/23
     * Time: 15:14
     * descript: add menu
     *
     */
    public function add($data = array()){
        if($data["name"] == ""){
            throw_exception("推荐位名不能为空");
        }
        $row = $this->find(array("name" => $data['name']));
        if(!$row){
            M('Position') -> create($data);
            return M('Position') -> add();
        }else{
            throw_exception("推荐位名已存在");
        }
    }

    public function chang($data = array()){
        if($data["name"] == ""){
            throw_exception("推荐位名不能为空");
        }
        $row = $this->find(array("name" => $data['name']));
        if(!$row){
            $change = array("name","description","update_time");
            return M('Position') -> where(array("id" => $data["id"])) -> field($change)->filter('strip_tags')-> save($data);
        }else{
            throw_exception("推荐位名已存在");
        }
    }

}