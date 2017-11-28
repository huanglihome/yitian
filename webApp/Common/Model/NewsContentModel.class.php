<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/7/24
 * Time: 18:17
 */
namespace Common\Model;
use Think\Model;
class NewsContentModel extends BaseModel{
    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/24
     * Time: 18:01
     * descript: add articleinfo
     */
    public function addContent($data){
        if(empty($data)){
            return 0;
        }
        $data['create_time'] = date("Y-m-d H:i:s");
        $data["update_time"] = date("Y-m-d H:i:s");
        M("NewsContent") -> create($data);
        return M("NewsContent") ->add();
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/25
     * Time: 00:47
     * descript: change article
     */
    public function changNew($id,$data){
        if(empty($data) || empty($id)){
            return 0;
        }
        $data['update_time'] = date("Y-m-d H:i:s");
        return M('NewsContent') -> where($id) -> save($data);
    }
}