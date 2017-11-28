<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    //后台首页展示
    public function indexAction(){
        $this->assign("user",session("userinfo"));
		$this -> display();
    }

    //展示统计数据
	public function ShowDataAction(){
        $data["AN"] = D('News') -> getAllCount(array("status" => 1));
        $AlN = D('News') -> getAllCount();
        $data["ANP"] = $data["AN"] / $AlN * 100;
        $data["UN"] = D("User") ->getAllCount(array("status" => array("neq",-1)));
        $UlN = D('User') -> getAllCount();
        $data["UNP"] = $data["UN"] / $UlN * 100;
        $data["YDN"] = D("News") ->getAllnewCountnum();
        $data["MYDN"] = D("News") ->getMaxnewCount() / $data["YDN"] * 100;
        $data["server_add"] = $_SERVER['SERVER_ADDR'];
        $data["remote_addr"] = $_SERVER['REMOTE_ADDR'];
        $data["phpversion"] = phpversion();
        $files = D("Upload") -> getFilenum();
        $data["FN"] = $files["allnum"];
        $data["FPN"] = $files["picture"] / $files["allnum"] * 100;
        $this->assign("data",$data);
		$this -> display();
	}
}