<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>菜单管理</title>
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
                    <h5>菜单列表</h5>
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
                                        <button type="button" target="_self" data-toggle="modal" class="btn btn-sm btn-primary" href="#modal-form"> 添加</button> </span>
                                <a type="button"  style="margin-left: 10px" class="btn btn-primary" target="_self" href="<?php echo U('/admin/menu/index',array('status' => -1));?>"> 回收站</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" placeholder="请输入关键词" class="input-sm form-control"> <span class="input-group-btn">
                                        <a type="button" class="btn btn-sm btn-primary" target="_self" href="<?php echo U('/admin/menu/index');?>"> 搜索</a> </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>菜单名</th>
                                <th>菜单描述</th>
                                <?php if($menulist[0]['status'] == -1): ?><th>还原</th>
                                    <?php else: ?>
                                    <th>修改</th><?php endif; ?>
                                <th>删除</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($menulist)): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($menu["menu_id"]); ?></td>
                                    <td><?php echo ($menu["menu_name"]); ?>
                                    </td>
                                    <td><?php echo ($menu["menu_descript"]); ?></td>
                                    <?php if($menu["status"] == -1): ?><td> <a href="<?php echo U('resetMenuStatus',array('menuid' => $menu['menu_id']));?>" target="_self"><i class="fa fa-wrench"></i></a></td>
                                        <?php else: ?>
                                        <td><a data-toggle="modal" href="#modal-form1" target="_self" onclick="changetext(<?php echo ($menu["menu_id"]); ?>,'<?php echo ($menu["menu_name"]); ?>','<?php echo ($menu["menu_name"]); ?>')"><i class="fa fa-wrench "></i></a></td><?php endif; ?>
                                    <td> <a href="<?php echo U('deleteMenu',array('menuid' => $menu['menu_id']));?>" target="_self"><i class="fa fa-times"></i></a></td>
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
<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <h3 class="m-t-none m-b">添加</h3>

                        <p>请添加菜单</p>
                        <form role="form" action="<?php echo U('/admin/menu/addMenu');?>" method="POST" target="_self">
                            <div class="form-group">
                                <label>菜单名：</label>
                                <input type="text" placeholder="请输入菜单名" class="form-control" name="menuname">
                            </div>
                            <div class="form-group">
                                <label>菜单描述：</label>
                                <input type="text" placeholder="请输入菜单描述" class="form-control" name="menudescript">
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>保存</strong>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-form1" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <h3 class="m-t-none m-b">修改</h3>

                        <p>请修改菜单</p>
                        <form role="form" action="<?php echo U('/admin/menu/changMenu');?>" method="POST" target="_self">
                            <input type="hidden" id="menuid" name="menuid">
                            <div class="form-group">
                                <label>菜单名：</label>
                                <input type="text" placeholder="请输入权限名" class="form-control" id="menuname" name="menuname">
                            </div>
                            <div class="form-group">
                                <label>菜单描述：</label>
                                <input type="text" placeholder="请输入权限描述" class="form-control" id="menudescript" name="menudescript">
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>保存</strong>
                                </button>
                            </div>
                        </form>
                    </div>
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
    function changetext(menuid,menuname,menudescript){
        $("#menuid").val(menuid);
        $("#menuname").val(menuname);
        $("#menudescript").val(menudescript);
    }
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>