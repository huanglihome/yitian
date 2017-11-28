<?php
namespace Common\Model;
use Think\Model;
class UserModel extends BaseModel{
	public function SelUserID($data = array()){
		//返回用户id
		return M("User") -> where($data) ->getField('user_id');
	}
	
	public function SelUserByNameAndId($data = array()){
		//返回用户
		return M("User") -> where($data) ->field('login_name,password,pwdkey',true) -> find();
	}
	
	public function CheckPassword($id,$password,$ip,$logintime){
		$data['user_id'] = $id;
		$data['password'] = md5($password);
		//通过用户id与密码获取用户信息(顺带验证密码是否正确)
        $save["lastlogin_time"] = $logintime;
        $save["lastlogin_ip"] = $ip;
		$result = M("User") -> where($data) -> find();
		if(!empty($result)){
            M("User") -> where($data) -> save($save);
			return $result;
		}else{
			return false;
		}
	}

	public function getList($data = array(),$page = 1,$pageSize = 100){
        $offsize = ($page - 1) * $pageSize;
        return M('User') -> where($data)-> field('password,pwdkey',true) -> limit($offsize,$pageSize) -> select();
	}

	
	public function UserUpdata($updata = array()){
		if(empty($updata["user_id"]) || !is_numeric($updata["user_id"])){
			return false;
		}else{
            $change = array("realname","qq_number","phone_number","email","update_time","head_portrait","password");
			return M('User') -> where(array("user_id" => $updata["user_id"]) ) -> field($change)->filter('strip_tags') -> save($updata);
		}
	}
	
	public function AddUser($data){
		$data['pwdkey'] = str_split(md5($data['password']),3)[0];
        $data['jurisdiction'] = 1;
		$data['password'] = md5($data['password']);
		$User = M("User"); // 实例化User对象
		// 根据表单提交的POST数据创建数据对象
		if($User->create($data)){   
			$result = $User->add();
			// 写入数据到数据库    
			if($result){      
			// 如果主键是自动增长型 成功后返回值就是最新插入的值     
				return $result;    }
				}
	}
	
	/*
	*author : lihome
	*2017 -7 -06
	*修改用户权限
	*/
	public function ChangeUserRule($data){
		if(empty($data['jurisdiction'])){
			return 0;
		}
		$user = M('User');
		$user -> update_time = date("Y-m-d H:i:s");
		$user -> jurisdiction = $data['jurisdiction'];
		return $user -> where(array("user_id" => $data['user_id'])) -> save();
	}
}