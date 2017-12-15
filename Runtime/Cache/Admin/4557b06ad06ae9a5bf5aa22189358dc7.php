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

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/yitian/Public/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/yitian/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/yitian/Public/js/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="/yitian/Public/css/animate.min.css" rel="stylesheet">
    <link href="/yitian/Public/css/style.min.css?v=4.1.0" rel="stylesheet"><base target="_blank">
    <style>
        .fancybox>img{
            max-height: 300px;
        }
        </style>

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>文件管理 <small>文件上传历史</small></h5>
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
                    <form class="table-responsive" action="<?php echo U('index');?>" method="post" target="_self" style="overflow:-Scroll;overflow-x:hidden">
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <div class="input-group">
                                    <button type="button" target="_self" data-toggle="modal" class="btn btn-sm btn-primary" href="#modal-form"> 添加</button> </span>
                                </div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-1">
                                <div class="in>-group">
                                    <select class="form-control m-b" name="type">
                                        <option value="">未选择</option>
                                        <?php if(is_array($typelist)): foreach($typelist as $key=>$typeitem): if($type == $typeitem.type): ?><option value="<?php echo ($typeitem["type"]); ?>" selected><?php echo ($typeitem["type"]); ?></option>
                                                <?php else: ?>
                                                <option value="<?php echo ($typeitem["type"]); ?>"><?php echo ($typeitem["type"]); ?></option><?php endif; endforeach; endif; ?>
                                    </select> <span class="input-group-btn"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="text" placeholder="请输入用户名" class="input-sm form-control" name="author"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                    <?php if(is_array($FilesList)): $i = 0; $__LIST__ = $FilesList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$file): $mod = ($i % 2 );++$i;?><a class="fancybox" href="http://localhost/yitian<?php echo ($file["path"]); ?>" title="图片1">
                        <?php if(($file["type"] == 'image/jpeg') OR ($file["type"] == 'image/png')): ?><img alt="image" src="http://localhost/yitian<?php echo ($file["path"]); ?>" />
                            <?php else: ?>
                            <img alt="image" src="/yitian/Public/img/file.jpg" /><?php endif; ?>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </form>
                </div>
            </div>
        </div>
        <?php echo ($page); ?>
    </div>
</div>
<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <h3 class="m-t-none m-b">附件</h3>

                        <p>请上传附件</p>
                        <form role="form" target="_self">
                            <div class="form-group">
                                附件:<input type="file" id="file1" name="HP" /><br />
                                <input type="button" id="upload" value="上传" class="btn btn-primary">
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>确定</strong>
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
<script src="/yitian/Public/js/plugins/fancybox/jquery.fancybox.js"></script>
<script>
    $(document).ready(function(){$(".fancybox").fancybox({openEffect:"none",closeEffect:"none"})});
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
                    alert("上传成功！");
                    if(data.success){
                        $("#file1").attr('type','text');
                        $("#file1").addClass('form-control');
                        $("#file1").val("http://localhost/yitian" + data.file_path);
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