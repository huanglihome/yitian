<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/7/24
 * Time: 18:00
 */
namespace Common\Model;
use Think\Model;
class NewsModel extends BaseModel {
    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/24
     * Time: 18:01
     * descript: add articleinfo
     */
    public function addNew($data){
        if(empty($data)){
            return 0;
        }
        $data['create_time'] = date("Y-m-d H:i:s");
        $data["status"] = 1;
        M("News") -> create($data);
        return M("News") ->add();
    }

    /**
     * Created by PhpStorm.
     * User: jiahua
     * Date: 2017/7/24
     * Time: 18:01
     * descript: find articleinfobyid
     */
    public function findById($data){
        if(!is_numeric($data['news_id'])){
            return 0;
        }
        return  M('News') -> where(array("cms_news.news_id" => $data['news_id'])) -> join('cms_news_content on cms_news.news_id = cms_news_content.news_id') ->find();
    }

    public function findByIdlist($data){
        if(!is_array($data['news_id'])){
            return 0;
        }
        $news["news_id"] = array("in",$data['news_id']);
        return  M('News') -> where($news) -> select();
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
        return M('News') -> where($id) -> save($data);
    }


    public function incnewcount($data = array()){
        if(!is_numeric($data['news_id'])){
            throw_exception("非法操作");
        }
        M('News') -> where($data) -> setInc("count");
    }

    public function getAllnewCountnum()
    {
        return M('News')->sum("count");
    }

    public function getMaxnewCount()
    {
        return M('News')->max("count");
    }
}