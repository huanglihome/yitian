<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
    <style>
        .row{
            width:40%;
            display: block;
            margin: 0 auto;
        }
        </style>
</head>


<body class="gray-bg">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <form role="form" action="<?php echo U('changeRule');?>" method="POST" target="_self">
                                        <input type="hidden" value="<?php echo ($ruleinfo["rule_id"]); ?>" name="ruleid">
                                    <div class="form-group">
                                        <label>权限名：</label>
                                        <input type="text" value="<?php echo ($ruleinfo["rule_name"]); ?>" class="form-control" name="rulename">
                                    </div>
                                    <div class="form-group">
                                        <label>权限描述：</label>
                                        <input type="text" value="<?php echo ($ruleinfo["rule_descript"]); ?>" class="form-control" name="ruledescript">
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>保存</strong>
                                        </button>
                                    </div>
                                </form>
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