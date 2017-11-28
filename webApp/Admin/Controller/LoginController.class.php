<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/7/31
 * Time: 11:47
 */
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    /*
        *author : lihome
        *2017 -7 -03
        *显示登陆页面
        */
    public function ShowLoginPageAction(){
        $this->display();
    }


    /*
    *author : lihome
    *2017 -7 -03
    *检查用户是否登陆
    */
    public function CheckLoginAction(){
        if(empty(session('userinfo'))){
            $this -> redirect("ShowLoginPage");
        }
    }
    /*
    *author : lihome
    *2017 -7 -03
    *登陆操作
    */
    public function LoginAction(){
        //防止直接访问页面
        if(IS_POST){
            $need = array("loginname" => "登录名不能为空","loginpassword" => "密码不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("loginname" => "login_name");
                $other = "";
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
                $password = I("loginpassword");
            }
            //获取用户Id
            $result = D("User") ->SelUserID($data);
            //判断返回值是否为空
            if(!empty($result)){
                //检验密码是否正确 记录IP,时间
                $row = D('User')->CheckPassword($result,$password,I('server.REMOTE_ADDR'),date("Y-m-d H:i:s"));
                if($row){
                    session('userinfo',$row);
                    $this -> success("登录成功",U('/admin/index/index'));
                }else{
                    $this -> error("密码错误",ShowLoginPage);
                }
            }else{
                $this -> error("用户不存在",ShowLoginPage);
            }
        }else{
            $this -> error("非法操作",ShowLoginPage);
        }
    }

    /*
    *author : lihome
    *2017 -7 -03
    *退出登录
    */
    public function OutLoginAction(){
        //清空session
        session('userinfo',null);
        $this -> success("退出成功",ShowLoginPage);
    }
}