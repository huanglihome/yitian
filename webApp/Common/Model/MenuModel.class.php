<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/7/23
 * Time: 14:47
 */
namespace Common\Model;
use Think\Model;
class MenuModel extends BaseModel{
    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/23
     * Time: 15:14
     * descript: add menu
     *
     */
    public function addMenu($data = array()){
        if($data["menu_name"] == ""){
            return 0;
        }
        $row = $this->findItem(array("menu_name" => $data['menu_name']));
        if(!$row){
            M('Menu') -> create($data);
            return M('Menu') -> add();
        }else{
            return -1;
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
    public function changMenu($data){
        if(!is_numeric($data["menu_id"])){
            return 0;
        }
        $row = $this -> findItem(array("menu_name" => $data['menu_name']));
        if(!$row){
            return -1;
        }else{
            $change = array("menu_name","menu_descript","update_time");
            return M('Menu') -> where(array("menu_id" => $data["menu_id"])) -> field($change)->filter('strip_tags')-> save($data);
        }
    }


}