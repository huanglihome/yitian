<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>个人资料</title>
    <meta name="keywords" content="<?php echo F('WEB_NAME');?>后台">
    <meta name="description" content="<?php echo F('WEB_NAME');?>后台是由逸天科技的faling研发">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/yitian/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/yitian/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/yitian/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/yitian/Public/css/animate.min.css" rel="stylesheet">
    <link href="/yitian/Public/css/style.min.css?v=4.1.0" rel="stylesheet"><base target="_blank">
    <style>
        #touxiang{
            max-width: 200px;
        }
        </style>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
   
        
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>个人资料 </h5>
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
                        <form method="post" class="form-horizontal" target="_self" action="<?php echo U('UpdataUser');?>">
							 <div class="form-group">
									<div class="col-sm-10">
										<input type="hidden" name="id" value="<?php echo ($Userinfo['user_id']); ?>" class="form-control">
									</div>
								</div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">头像</label>
                                <div class="col-sm-10">
                                    <?php if(($Userinfo['head_portrait'] == '') OR ($Userinfo['head_portrait'] == null)): ?><img alt="image" class="img-circle" id="touxiang" src="/yitian/Public/img/profile_small.jpg">
                                        <?php else: ?>
                                        <img alt="image" class="img-circle" id="touxiang" src="http://localhost/yitian<?php echo ($Userinfo['head_portrait']); ?>"><?php endif; ?>
                                    <span class="form-group">
                                        <input type="file" id="file1" name="HP" /><br />
                                        <input type="button" id="upload" value="上传" class="btn btn-primary">
                                    </span>
                                </div>
                            </div>
							<div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">真名</label>
                                <div class="col-sm-10">
                                    <input type="text" name="real_name" class="form-control" value="<?php echo ($Userinfo['realname']); ?>">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">QQ号码</label>
                                <div class="col-sm-10">
                                    <input type="text" name="qqnumber" class="form-control" value="<?php echo ($Userinfo['qq_number']); ?>">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">电话号码</label>
                                <div class="col-sm-10">
                                    <input type="phone" name="phonenumber" class="form-control" value="<?php echo ($Userinfo['phone_number']); ?>">
                                </div>
                            </div>
							 <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" value="<?php echo ($Userinfo['email']); ?>">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                             <div class="form-group">
									<label class="col-sm-2 control-label">上次登陆时间</label>
									<div class="col-sm-10">
										<input type="text" name="lastlogintime" disabled="" value="<?php echo ($Userinfo['lastlogin_time']); ?>" class="form-control" >
									</div>
								</div>
								 <div class="hr-line-dashed"></div>  
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <button class="btn btn-white" type="submit">取消</button>
                                </div>
                            </div>
                        </form>
                        <div class="ibox-title">
                            <h5>密码修改</h5>
                        </div>
                        <form method="post" class="form-horizontal" target="_self" action="<?php echo U('changPassword');?>">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" value="<?php echo ($Userinfo['user_id']); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">旧密码</label>
                                <div class="col-sm-10">
                                    <input type="password" name="oldpassword" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">新密码</label>
                                <div class="col-sm-10">
                                    <input type="password" name="newpassword" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <button class="btn btn-white" type="submit">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/yitian/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/yitian/Public/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/yitian/Public/js/content.min.js?v=1.0.0"></script>
    <script src="/yitian/Public/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
        $(function () {
            $("#upload").click(function () {
                var formData = new FormData();
                formData.append("file", document.getElementById("file1").files[0]);
                $.ajax({
                    url: "http://localhost/yitian/index.php/admin/upload/Uploadimg",
                    type: "POST",
                    data: formData,
                    /**
                     *必须false才会自动加上正确的Content-Type
                     */
                    contentType: false,
                    /**
                     * 必须false才会避开jQuery对 formdata 的默认处理
                     * XMLHttpRequest会对 formdata 进行正确的处理
                     */
                    processData: false,
                    success: function (data) {
                        if(data.success){
                            $("#file1").attr('type','text');
                            $("#file1").addClass('form-control');
                            $("#touxiang").attr('src',"http://localhost/yitian"+data.file_path);
                            $("#file1").val(data.file_path);
                            $("#upload").hide();
                        }


                    },
                    error: function () {
                        alert("上传失败！");
                        $("#imgWait").hide();
                    }
                });
            });
        });
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>