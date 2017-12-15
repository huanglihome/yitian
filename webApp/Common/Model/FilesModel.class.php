<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/12/14
 * Time: 16:50
 */
namespace Common\Model;
use Think\Model;
class FilesModel extends BaseModel{
    public function getType(){
       return M('Files')->Distinct(true)->field('type')->select();
    }
}