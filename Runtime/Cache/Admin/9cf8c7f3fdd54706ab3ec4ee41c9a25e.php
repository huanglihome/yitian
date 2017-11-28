<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>权限列表</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

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
                        <h5>权限列表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a target="_self" data-toggle="modal" class="btn btn-primary" href="#modal-form">添加权限</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
						
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-9">
							</div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="text" placeholder="请输入关键词" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                </div>
                            </div>
                        </div>
                        <form class="table-responsive" action="<?php echo U('ChangeUserRule');?>" method="post" target="_self">
                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                        <th></th>
                                        <th>ID</th>
										<th>权限名</th>
                                        <th>描述</th>
                                        <th>创建时间</th>
                                        <th>修改时间</th>
										<th>修改</th>
										<th>删除</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php if(is_array($rulelist)): $i = 0; $__LIST__ = $rulelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rule): $mod = ($i % 2 );++$i;?><tr>
                                        <td>
                                            <input type="text" name="id" value="<?php echo ($userid); ?>" hidden>
										<?php if(in_array(($rule['rule_id']), is_array($userrule)?$userrule:explode(',',$userrule))): ?><input type="checkbox" checked class="i-checks" name="ruleid[]" value="<?php echo ($rule["rule_id"]); ?>">
											<?php else: ?>
											<input type="checkbox" class="i-checks" name="ruleid[]" value="<?php echo ($rule["rule_id"]); ?>"><?php endif; ?>
                                        </td>
                                        <td><?php echo ($rule["rule_id"]); ?></td>
                                        <td><?php echo ($rule["rule_name"]); ?>
                                        </td>
                                        <td><?php echo ($rule["rule_descript"]); ?></td>
                                        <td><?php echo ($rule["create_time"]); ?></td>
                                        <td><?php echo ($rule["update_time"]); ?>
                                        </td>
                                        <td><a data-toggle="modal" href="#modal-form1" target="_self" onclick="changetext(<?php echo ($rule["rule_id"]); ?>,'<?php echo ($rule["rule_name"]); ?>','<?php echo ($rule["rule_descript"]); ?>')"><i class="fa fa-wrench "></i></a></td>
										<td> <a target="_self" href="<?php echo U('/admin/rule/deleteRule',array('ruleid' => $rule['rule_id']));?>"><i class="fa fa-times"></i></a></td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    
                                </tbody>
                            </table>
                            <input type="submit" value="保存">
                        </form>

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

                                <p>请添加权限</p>
                                <form role="form" action="<?php echo U('/admin/rule/addRule');?>" method="POST" target="_self">
                                    <div class="form-group">
                                        <label>权限名：</label>
                                        <input type="text" placeholder="请输入权限名" class="form-control" name="rulename">
                                    </div>
                                    <div class="form-group">
                                        <label>权限描述：</label>
                                        <input type="text" placeholder="请输入权限描述" class="form-control" name="ruledescript">
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

                            <p>请修改权限</p>
                            <form role="form" action="<?php echo U('/admin/rule/changeRule');?>" method="POST" target="_self">
                                <input type="hidden" id="ruleid" name="ruleid">
                                <div class="form-group">
                                    <label>权限名：</label>
                                    <input type="text" placeholder="请输入权限名" class="form-control" name="rulename" id="rulename">
                                </div>
                                <div class="form-group">
                                    <label>权限描述：</label>
                                    <input type="text" placeholder="请输入权限描述" class="form-control" name="ruledescript" id="ruledescript">
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
            $("#ruleid").val(menuid);
            $("#rulename").val(menuname);
            $("#ruledescript").val(menudescript);
        }
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>