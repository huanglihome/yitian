<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

class UserController extends CommonController {
	/*
	*author : lihome
	*2017 -7 -03
	*显示用户列表
	*/
	public function ShowUserListAction(){
	    if($_GET["status"] == -1) {
            $data['status'] = -1;
        }else{
            $data['status'] = array('neq', -1);
        }
        $page = $_REQUEST["p"] ? $_REQUEST["p"] : 1;
        $pageSize = 5;
        $result = D('User') -> getList($data,$page,$pageSize);
        $count = D('User') -> getAllCount($data);
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page = setPage($Page);
        $Page->lastSuffix = false;
        $show = bootstrap_page_style($Page->show());
		$result = D('User') -> getList($data);
		$this->assign('userlist',$result);
        $this -> assign("page",$show);
		$this->display();
	}
	/*
	*author : lihome
	*2017 -7 -03
	*删除用户
	*/
	public function deleteUserAction(){
		//用户ID不能为空
        if(IS_GET) {
            $need = array("id" => "ID不能为空");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("id" => "user_id");
                $other = "";
                $data = getdata(I("get.","","htmlspecialchars"),$want,$other);
            }
            //获取删除用户返回值
            try{
                $result = D('User')->deleteItem($data);
            }catch (Exception $e){
                $this->error($e->getMessage());
            }
                $this->success("删除成功");
        }
	}
	
	/*
	*author : lihome
	*2017 -7 -03
	*显示个人信息页面
	*/
	public function UserUpdataPageAction(){
		$data['user_id'] = session('userinfo')["user_id"];
		$data['login_name'] = session('userinfo')["login_name"];
		//dump($data);
		//通过用户登录名与用户ID进行查询用户信息
		$user = D('User') -> SelUserByNameAndId($data);
		//如果返回值为空,获取用户信息失败
		if(empty($user)){
			$this -> error("操作失败",U('/admin/index/ShowData'));
		}else{
		$this -> assign('Userinfo',$user);
		$this->display();	
		}
	}
	
	/*
	*author : lihome
	*2017 -7 -03
	*修改个人信息
	*/
	public function UpdataUserAction(){
	    if(IS_POST) {
            $need = array("id" => "ID不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            }else {
                $want = array("id" => "user_id","real_name" => "realname","qqnumber" => "qq_number","phonenumber" => "phone_number","email" => "email","HP" => "head_portrait" );
                $other = array("update_time");
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
            }
            //获取修改操作返回值
            $result = D('User')->UserUpdata($data);
            if (!empty($result) && $result) {
                //返回值如果是0，说明并没有数据修改
                if ($result > 0) {
                    $this->success("修改成功", UserUpdataPage);
                } else if ($result == 0) {
                    $this->error("无修改项", UserUpdataPage);
                }
            } else {
                $this->error("非法操作", UserUpdataPage);
            }
        }
	}

    //修改密码
    public function changPasswordAction(){
        if(IS_POST) {
            $need = array("id" => "ID不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("id" => "user_id", "oldpassword" => "oldpassword", "newpassword" => "newpassword");
                $other = array("update_time");
                $data = getdata(I("post.", "", "htmlspecialchars"), $want, $other);
            }
            $row = D('User')->CheckPassword($data["user_id"],$data["oldpassword"],I('server.REMOTE_ADDR'),date("Y-m-d H:i:s"));
            if($row){
                //获取修改操作返回值
                $result = D('User')->UserUpdata(array("user_id" => $data["user_id"],"password" => md5($data["newpassword"])));
                if (!empty($result) && $result) {
                    //返回值如果是0，说明并没有数据修改
                    if ($result > 0) {
                        $this->success("修改成功", UserUpdataPage);
                    } else if ($result == 0) {
                        $this->error("无修改项", UserUpdataPage);
                    }
                } else {
                    $this->error("非法操作", UserUpdataPage);
                }
            }else{
                $this -> error("密码错误",ShowLoginPage);
            }
        }else {
            $this->error("非法操作", UserUpdataPage);
        }
    }
	
	/*
	*author : lihome
	*2017 -7 -03
	*添加用户
	*/
	public function AddUserAction(){
		//判断是否有数据提交,若有,进行添加用户操作否则跳转到添加用户页面
		if(IS_POST){
			//添加用户登录名与密码为必传
            $need = array("loginname" => "用户名不能为空","password" => "用户密码不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            }else {
                $want = array("loginname" => "login_name","password" => "password","qqnumber" => "qq_number","phonenumber" => "phone_number","email" => "email","real_name"=>"realname","HP" => "head_portrait");
                $other = array("status","create_time");
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
            }
			//为下面各值赋值,若没有传该值,则不用声明变量

			//dump($data);
			$result = D('User') -> AddUser($data);
			if(empty($result) || !$result){
				$this -> error("添加失败");
			}else{
				$this ->success("添加成功",ShowUserList);
			}
		}else{
				$this->display();
			}
	
	}
	
	
	/*
	*author : lihome
	*2017 -7 -04
	*获取状态为1的rule列表
	*/
	public function ShowRuleListAction(){
			//用户ID不能为空
        if(IS_GET) {
            $need = array("id" => "ID不能为空");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            }else {
                $want = array("id" => "user_id");
                $other = "";
                $data = getdata(I("get.","","htmlspecialchars"),$want,$other);
            }
            $row = D('User')->SelUserByNameAndId($data);
            $result = D('Rule')->getRuleList();
            if ((empty($result) && !$result) || (empty($row) && !$row)) {
                $this->error("获取权限列表失败");
            } else {
                $this->assign("rulelist", $result);
                $this->assign("userrule", $row['jurisdiction']);
                $this->assign("userid", $data['user_id']);
                $this->display();
                //dump(explode(",",$row['jurisdiction']));
            }
        }
		
	} 
	
	
	/*
	*author : lihome
	*2017 -7 -06
	*修改用户权限
	*/
	public function ChangeUserRuleAction(){
		//用户ID不能为空
        if(IS_POST) {
            $need = array("id" => "ID不能为空","ruleid" => "权限id不能为空");
            $row = hasRequired($_POST, $need);
            if ($row !== true) {
                $this->error($row);
            }else {
                $want = array("id" => "user_id");
                $other = "";
                $data = getdata(I("post.","","htmlspecialchars"),$want,$other);
            }
            // dump(I('ruleid'));
            $row = D('User')->SelUserByNameAndId($data);
           // dump($row);
            if ($row['jurisdiction'] == implode(",", I('ruleid'))) {
                $this->error("没有修改", ShowUserList);
            } else {
                $data['jurisdiction'] = implode(",", I('ruleid')) == NULL ? I('ruleid') : implode(",", I('ruleid'));
            }
            //dump($data);
            $result = D('User')->ChangeUserRule($data);
            if ($result == null || $result == 0) {
                $this->error("修改出错", ShowUserList);
            } else if ($result > 0) {
                $this->success("修改成功", ShowUserList);
            }
        }
	}



    //还原被删除的用户
    public function resetUserStatusAction(){
        //用户ID不能为空
        if(IS_GET) {
            $need = array("id" => "ID不能为空");
            $row = hasRequired($_GET, $need);
            if ($row !== true) {
                $this->error($row);
            } else {
                $want = array("id" => "user_id");
                $other = "";
                $data = getdata(I("get.", "", "htmlspecialchars"), $want, $other);
            }
            try{
                $result = D('User')->resetStatus($data);
            }catch (Exception $e){
                $this->error($e->getMessage());
            }
            $this->success("还原用户成功");
        }
    }
}