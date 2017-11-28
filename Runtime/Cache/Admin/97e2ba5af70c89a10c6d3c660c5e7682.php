<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>用户列表</title>
    <meta name="keywords" content="<?php echo F('WEB_NAME');?>后台">
    <meta name="description" content="<?php echo F('WEB_NAME');?>后台是由逸天科技的faling研发">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/yitian/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/yitian/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/yitian/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/yitian/Public/css/animate.min.css" rel="stylesheet">
    <link href="/yitian/Public/css/style.min.css?v=4.1.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>用户列表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
						
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="input-group">
                                    <a type="button"  class="btn btn-primary" target="_self" href="<?php echo U('/admin/user/AddUser');?>"> 添加</a>
                                    <a type="button"  style="margin-left: 10px" class="btn btn-primary" target="_self" href="<?php echo U('/admin/user/ShowUserList',array('status' => -1));?>"> 回收站</a>
                                </div>
                            </div>
                            <div class="col-sm-7">
							</div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="text" placeholder="请输入关键词" class="input-sm form-control"> <span class="input-group-btn">
                                        <a type="button" class="btn btn-sm btn-primary" target="_self" href="<?php echo U('/admin/user/ShowUserList');?>"> 搜索</a> </span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
										<th>登陆名</th>
                                        <th>真名</th>
                                        <th>qq号码</th>
                                        <th>手机号码</th>
                                        <th>email</th>
										<th>修改时间</th>
										<th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php if(is_array($userlist)): $i = 0; $__LIST__ = $userlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr>
                                        <td><?php echo ($user["user_id"]); ?></td>
                                        <td><?php echo ($user["login_name"]); ?>
                                        </td>
                                        <td><?php echo ($user["realname"]); ?></td>
                                        <td><?php echo ($user["qq_number"]); ?></td>
                                        <td><?php echo ($user["phone_number"]); ?>
                                        </td>
										<td><?php echo ($user["email"]); ?></td>
										<td><?php echo ($user["update_time"]); ?></td>
                                        <!--<td><a href=<?php echo U("ShowRuleList",array('id' => $user['user_id']));?> target="_self">修改权限</a></td>-->
                                        <?php if($user["status"] == -1): ?><td> <a href=<?php echo U("resetUserStatus",array('id' => $user['user_id']));?> target="_self">还原</a></td><?php endif; ?>
                                        <td> <a href=<?php echo U("deleteUser",array('id' => $user['user_id']));?> target="_self">删除</a></td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        <?php echo ($page); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="/yitian/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/yitian/Public/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/yitian/Public/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/yitian/Public/js/content.min.js?v=1.0.0"></script>
    <script src="/yitian/Public/js/plugins/iCheck/icheck.min.js"></script>
    <script src="/yitian/Public/js/demo/peity-demo.min.js"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>