<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/7/31
 * Time: 14:53
 */
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
    //构造函数
    public function __construct()
    {
        parent::__construct();
        $this -> _init();
    }

    //验证登陆
    private function _init(){
        // 如果已经登录
        $isLogin = $this->isLogin();
        if(!$isLogin) {
            // 跳转到登录页面
            $this->redirect("/admin/login/ShowLoginPage");
        }
    }

    /**
     * 获取登录用户信息
     * @return array
     */
    public function getLoginUser() {
        return session("userinfo");
    }

    /**
     * 判定是否登录
     * @return boolean
     */
    public function isLogin() {
        $user = $this->getLoginUser();
        if($user && is_array($user)) {
            return true;
        }

        return false;
    }

}