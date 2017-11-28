<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/8/20
 * Time: 16:32
 */
namespace Admin\Controller;
use Think\Controller;
class SavedbController extends CommonController {
    //导出数据库
    public function dumpmysqlAction(){
        $shell = "\"D:\Program Files\MySQL\MySQL Server 5.7\bin\mysqldump.exe\" ".C("DB_NAME")." > "."cms".date("Y-m-d").".sql";
        system($shell,$i);
        if($i == 1){
        $this->ajaxReturn(getJson("400","导出失败", "",""),JSON);
        }else{
            $this->ajaxReturn(getJson("200","导出", "",""),JSON);
        }
    }
}