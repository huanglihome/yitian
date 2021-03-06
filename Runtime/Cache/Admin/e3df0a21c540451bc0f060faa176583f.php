<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title><?php echo C("WEB_NAME");?> 后台 - 登录</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link href="/yitian/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/yitian/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/yitian/Public/css/animate.min.css" rel="stylesheet">
    <link href="/yitian/Public/css/style.min.css" rel="stylesheet">
    <link href="/yitian/Public/css/login.min.css" rel="stylesheet">
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>

</head>

<body class="signin">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-7">
                <div class="signin-info">
                    <div class="logopanel m-b">
                        <h1>[ <?php echo C("WEB_NAME");?> ]</h1>
                    </div>
                    <div class="m-b"></div>
                    <h4>欢迎使用 <strong><?php echo C("WEB_NAME");?>后台</strong></h4>
                    <ul class="m-b">
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 版权所有: <?php echo C("WEB_COPYRIGHT");?></li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 开发人员: <?php echo C("WEB_AUTHOR");?></li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 联系方式: <?php echo C("AUTHOR_EMAIL");?></li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 版本: <?php echo C("WEB_VERSION");?></li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 更新日期: <?php echo C("RELEASE_TIME");?></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5">
                <form method="post" action="<?php echo U('Login');?>">
                    <h4 class="no-margins">登录：</h4>
                    <p class="m-t-md">登录到<?php echo C("WEB_NAME");?>后台</p>
                    <input type="text" class="form-control uname" placeholder="用户名" name="loginname" />
                    <input type="password" class="form-control pword m-b" placeholder="密码" name="loginpassword" />
                    <a href="">忘记密码了？</a>
                    <button class="btn btn-success btn-block">登录</button>
                </form>
            </div>
        </div>
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2017 All Rights Reserved. <?php echo C("WEB_COPYRIGHT");?>
            </div>
        </div>
    </div>
</body>

</html>