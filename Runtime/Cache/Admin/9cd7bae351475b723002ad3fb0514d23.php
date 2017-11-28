<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>留言管理</title>
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
                    <form class="row"  action="<?php echo U('/admin/leavingmsg/index');?>" method="post" target="_self">
                        <div class="col-sm-2">
                            <div class="input-group">
                                <!--<button type="button" target="_self" data-toggle="modal" class="btn btn-sm btn-primary" href="#modal-form"> 添加</button> </span>-->
                                <a type="button"  style="margin-left: 10px" class="btn btn-primary" target="_self" href="<?php echo U('/admin/leavingmsg/index',array('status' => -1));?>"> 回收站</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-1">
                            <div class="in-group">
                                <select class="form-control m-b" name="status">
                                    <option value=0>未选择</option>
                                    <?php if($status == 0): ?><option value=0 selected>未回复</option>
                                        <?php else: ?>
                                        <option value=0>未回复</option><?php endif; ?>
                                    <?php if($status == 1): ?><option value=1 selected>已回复</option>
                                        <?php else: ?>
                                        <option value=1>已回复</option><?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" placeholder="请输入关键词" class="input-sm form-control" name="title"> <span class="input-group-btn">
                                       <button type="submit" class="btn btn-sm btn-primary"> 搜索</button> </span>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>留言人</th>
                                <th>email</th>
                                <th>标题</th>
                                <?php if($Leavinglist[0]['status'] == -1): ?><th>还原</th>
                                    <?php else: ?>
                                    <th>回复</th><?php endif; ?>
                                <th>删除</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($Leavinglist)): $i = 0; $__LIST__ = $Leavinglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$leaving): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($leaving["id"]); ?></td>
                                    <td><?php echo ($leaving["name"]); ?></td>
                                    <td><?php echo ($leaving["email"]); ?></td>
                                    <td><?php echo ($leaving["title"]); ?></td>
                                    <?php if($leaving["status"] == -1): ?><td> <a href="<?php echo U('resetStatus',array('id' => $leaving['id']));?>" target="_self"><i class="fa fa-wrench"></i></a></td>
                                        <?php else: ?>
                                        <td><a data-toggle="modal" href="#modal-form" target="_self" onclick="changetext(<?php echo ($leaving["id"]); ?>,'<?php echo ($leaving["title"]); ?>','<?php echo ($leaving["content"]); ?>','<?php echo ($leaving["answer"]); ?>')"><i class="fa fa-wrench "></i></a></td><?php endif; ?>
                                    <td> <a href="<?php echo U('delete',array('id' => $leaving['id']));?>" target="_self"><i class="fa fa-times"></i></a></td>
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
                        <h3 class="m-t-none m-b">回复</h3>

                        <p>请回复留言</p>
                        <form role="form" action="<?php echo U('/admin/leavingmsg/reLeaving');?>" method="POST" target="_self">
                            <input type="hidden" id="id" name="id">
                            <div class="form-group">
                                <label>标题：</label>
                                <input type="text"  class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label>内容：</label>
                                <input type="text" class="form-control" id="content" name="content">
                            </div>
                            <div class="form-group">
                                <label>回复内容：</label>
                                <textarea type="text" placeholder="请输入回复内容" class="form-control" id="answer" name="answer">
                                </textarea>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>回复</strong>
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
    function changetext(id,title,content,answer){
        $("#id").val(id);
        $("#title").val(title);
        $("#content").val(content);
        $("#answer").val(answer);
    }
</script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>