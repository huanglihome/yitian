<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>文章列表</title>
    <meta name="keywords" content="<?php echo F('WEB_NAME');?>后台">
    <meta name="description" content="<?php echo F('WEB_NAME');?>后台是由逸天科技的faling研发">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/yitian/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/yitian/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/yitian/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/yitian/Public/css/animate.min.css" rel="stylesheet">
    <link href="/yitian/Public/css/style.min.css?v=4.1.0" rel="stylesheet"><base target="_blank">
    <style>
        .row{
            width: 100%;
        }
    </style>
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>推荐位内容列表</h5>
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
                    <form class="table-responsive" action="<?php echo U('index');?>" method="post" target="_self">
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <div class="input-group">
                                    <a type="button" target="_self" data-toggle="modal" class="btn btn-sm btn-primary" href="<?php echo U('/admin/positionContent/add');?>"> 添加</a>
                                    <a type="button"  style="margin-left: 10px" class="btn btn-primary" target="_self" href="<?php echo U('/admin/positionContent/index',array('status' => -1));?>"> 回收站</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-1">
                                <div class="input-group">
                                    <select class="form-control m-b" name="positionid">
                                        <option value="">未选择</option>
                                        <?php if(is_array($positionlist)): foreach($positionlist as $key=>$position): ?><option value="<?php echo ($position["id"]); ?>"><?php echo ($position["name"]); ?></option><?php endforeach; endif; ?>
                                    </select> <span class="input-group-btn"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="text" placeholder="请输入关键词" class="input-sm form-control" name="title"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>标题</th>
                                <th>图片</th>
                                <th>URL</th>
                                <th>文章ID</th>
                                <?php if($positioncontentlist[0]['status'] == -1): ?><th>还原</th>
                                    <?php else: ?>
                                    <th>修改</th><?php endif; ?>
                                <th>删除</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($positioncontentlist)): $i = 0; $__LIST__ = $positioncontentlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$positioncontent): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($positioncontent["id"]); ?></td>
                                    <td><?php echo ($positioncontent["title"]); ?>
                                    </td>
                                    <td><?php echo ($positioncontent["thumb"]); ?></td>
                                    <td><?php echo ($positioncontent["url"]); ?></td>
                                    <td><?php echo ($positioncontent["news_id"]); ?>
                                    </td>
                                    <?php if($positioncontent["status"] == -1): ?><td> <a target="_self" href="<?php echo U('/admin/positionContent/rPCStatus',array('positioncontentid' => $positioncontent['id']));?>"><i class="fa fa-wrench"></i></a></td>
                                        <?php else: ?>
                                        <td><a data-toggle="modal" href="<?php echo U('/admin/positionContent/change',array('id' => $positioncontent['id']));?>" target="_self" ><i class="fa fa-wrench "></i></a></td><?php endif; ?>
                                    <td> <a target="_self" href="<?php echo U('/admin/positionContent/delete',array('positioncontentid' => $positioncontent['id']));?>"><i class="fa fa-times"></i></a></td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                            </tbody>
                        </table>
                    </form>
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