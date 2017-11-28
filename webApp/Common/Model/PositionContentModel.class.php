<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/8/12
 * Time: 22:59
 */
namespace Common\Model;
use Think\Model;
class PositionContentModel extends BaseModel{
    public function add($data = array()){
        if(!is_numeric($data["position_id"])){
            throw_exception("非法推荐位ID");
        }
        if(!is_null($data["news_id"]) || !empty($data["news_id"])){
        if(!is_numeric($data["news_id"])){
            throw_exception("非法文章ID");
        }}
        M('PositionContent') -> create($data);
        return M('PositionContent') -> add();
    }

    public function chang($data = array()){
        if($data["title"] == ""){
            throw_exception("推荐标题不能为空");
        }
        if(!is_numeric($data["id"])){
            throw_exception("推荐位内容ID格式不正确");
        }
            $change = array("title","position_id","news_id","thumb","url","update_time");
            return M('PositionContent') -> where(array("id" => $data["id"])) -> field($change)->filter('strip_tags')-> save($data);
    }
}