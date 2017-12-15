<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title><?php echo F("WEB_NAME");?> 后台</title>


    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/yitian/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/yitian/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/yitian/Public/css/animate.min.css" rel="stylesheet">
    <link href="/yitian/Public/css/style.min.css?v=4.1.0" rel="stylesheet">
    <style>
        #touxiang{
            max-width: 75px;
        }
    </style>
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <?php if(($user['head_portrait'] == '') OR ($user['head_portrait'] == null)): ?><img alt="image" class="img-circle" id="touxiang" src="/yitian/Public/img/profile_small.jpg">
                                        <?php else: ?>
                                        <img alt="image" class="img-circle" id="touxiang"  src="http://localhost/yitian<?php echo ($user['head_portrait']); ?>"><?php endif; ?>
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo ($user['realname']); ?></strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href=<?php echo U("/admin/user/UserUpdataPage");?> target="_self">个人资料</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?php echo U('/admin/login/OutLogin');?>">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                        </div>
                    </li>
                    <li>
                        <a class="J_menuItem" href="<?php echo U('/admin/index/ShowData');?>"><i class="fa fa-desktop"></i> <span class="nav-label"></span>首页</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="<?php echo U('/admin/user/ShowUserList');?>"><i class="fa fa-user"></i> <span class="nav-label"></span>用户管理</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-edit"></i>
                            <span class="nav-label">内容管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('/admin/menu/index');?>"><span class="nav-label">菜单管理</span></a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('/admin/news/getNewsList');?>"> <span class="nav-label">文章管理</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">推荐位管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('/admin/position/index');?>"><span class="nav-label">推荐位管理</span></a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('/admin/positionContent/index');?>"><span class="nav-label">推荐位内容管理</span></a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a class="J_menuItem" href="<?php echo U('/admin/leavingmsg/index');?>"><i class="fa fa-envelope"></i> <span class="nav-label">留言管理</span></a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="<?php echo U('/admin/files/index');?>"><i class="fa fa-user"></i> <span class="nav-label"></span>文件管理</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="<?php echo U('/admin/site/setsite');?>"><i class="fa fa-desktop"></i> <span class="nav-label">站点设置</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="<?php echo U('/admin/index/index');?>" class="active J_menuTab" data-id="index_v1.html">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="<?php echo U('/admin/login/OutLogin');?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo U('ShowData');?>" frameborder="0" data-id="<?php echo U('ShowData');?>" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">&copy; 2016-2017 <a href="#" target="_self"><?php echo F("WEB_NAME");?></a>
                </div>
            </div>
        </div>

        <!--右侧边栏结束-->

    </div>
    <script src="/yitian/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/yitian/Public/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/yitian/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/yitian/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/yitian/Public/js/plugins/layer/layer.min.js"></script>
    <script src="/yitian/Public/js/hplus.min.js?v=4.1.0"></script>
    <script type="text/javascript" src="/yitian/Public/js/contabs.min.js"></script>
    <script src="/yitian/Public/js/plugins/pace/pace.min.js"></script>
</body>

</html>